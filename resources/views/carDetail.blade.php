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
        <img class=" w-xs lg:mb-10 md:w-md lg:w-lg" src="{{ asset('storage/' . $car->gambar_mobil) }}" alt=""
            srcset="">
        <div class="flex flex-col items-center mb-5 gap-3">
            <h1 class=" text-3xl font-bold lg:text-4xl">{{ $car['nama_mobil'] }}</h1>
            <h1 class=" text-sm lg:text-base status bg-blue-800 text-white py-1 font-medium px-4 rounded-3xl">Status: {{ $car['status'] }}</h1>
        </div>
        <div class="spesifikasi flex items-center justify-center gap-10 lg:gap-40 mb-5">
            <div class="flex gap-2 items-center">
                <img src="{{ url('img/car-chair 1.svg') }}" alt="seaters" class="w-5 h-5 lg:w-10 lg:h-10">
                <p class="text-md font-semibold lg:text-lg">{{ $car['seater'] }}</p>
            </div>
            <div class="flex gap-2 items-center">
                <img src="{{ url('img/gas-station 1.svg') }}" alt="seaters" class="w-5 h-5 lg:w-10 lg:h-10">
                <p class="text-md font-semibold lg:text-lg">{{ $car['bahan_bakar'] }}</p>
            </div>
            <div class="flex gap-2 items-center">
                <img src="{{ url('img/gearbox 1.svg') }}" alt="seaters" class="w-5 h-5 lg:w-10 lg:h-10">
                <p class="text-md font-semibold lg:text-lg">{{ $car['tipe'] }}</p>
            </div>
        </div>
        <table class="table-auto w-xs border-solid mb-4 lg:w-4xl">
            <thead class=" bg-blue-700 text-white border border-solid border-black">
                <tr>
                    <th class="border border-solid border-black text-md lg:text-lg">Duration</th>
                    <th class="border border-solid border-black text-md lg:text-lg">Price</th>
                </tr>
            </thead>
            <tbody class="border border-solid border-black w-sm">
                @foreach ($car->prices as $price)
                    <tr>
                        <td class="border border-solid border-black text-center text-md lg:text-lg">{{ $price->durasi }}
                        </td>
                        <td class="border border-solid border-black text-center text-md lg:text-lg">
                            Rp. {{ number_format($price->harga, 0, ',', '.') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex gap-2">
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
