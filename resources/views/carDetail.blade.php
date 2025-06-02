<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Detail</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar></x-navbar>
    <section class="flex flex-col items-center justify-center mt-30">
        <img class=" w-xs lg:mb-10 md:w-md lg:w-lg" src="{{ asset('storage/' . $car->gambar_mobil) }}" alt="" srcset="">
        <h1 class=" text-3xl font-bold mb-5 lg:mb-10 lg:text-4xl">{{ $car['nama_mobil'] }}</h1>
        <div class="spesifikasi flex w-2xl items-center justify-center gap-20 lg:gap-40 mb-5">
            <div class="flex gap-3 items-center">
                <img src="{{ url('img/car-chair 1.svg') }}" alt="seaters" class="w-9 h-9 lg:w-13 lg:h-13">
                <p class="text-md font-semibold">{{ $car['seater'] }}</p>
            </div>
            <div class="flex gap-3 items-center">
                <img src="{{ url('img/gas-station 1.svg') }}" alt="seaters" class="w-9 h-9 lg:w-13 lg:h-13">
                <p class="text-md font-semibold">{{ $car['bahan_bakar'] }}</p>
            </div>
            <div class="flex gap-3 items-center">
                <img src="{{ url('img/gearbox 1.svg') }}" alt="seaters" class="w-9 h-9 lg:w-13 lg:h-13">
                <p class="text-md font-semibold">{{ $car['tipe'] }}</p>
            </div>
        </div>
        <table class="table-auto w-md border-solid mb-8 lg:w-4xl">
            <thead class=" bg-blue-700 text-white border border-solid border-black">
                <tr>
                    <th class="border border-solid border-black text-md lg:text-lg">Duration</th>
                    <th class="border border-solid border-black text-md lg:text-lg">Price</th>
                </tr>
            </thead>
            <tbody class="border border-solid border-black w-sm">
                @foreach ($car->prices as $price)
                    <tr>
                        <td class="border border-solid border-black text-center text-md lg:text-lg">{{ $price->durasi }}</td>
                        <td class="border border-solid border-black text-center text-md lg:text-lg">
                            Rp. {{ number_format($price->harga, 0, ',', '.') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex gap-5">
            <a href="/cars"
                class="px-10 py-1 border-2 border-blue-700 rounded-4xl text-md text-blue-700 font-bold">Back</a>
            <a href="{{ route('booking.create', ['id' => $car->id]) }}"
                class="px-10 py-1 border-2 bg-blue-700 border-blue-700 rounded-4xl text-md text-white font-bold">Book a
                car</a>
        </div>
    </section>
    <x-footer></x-footer>
</body>

</html>
