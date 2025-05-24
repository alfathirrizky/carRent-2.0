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
        <img class=" w-lg md:w-md sm:w-xs" src="{{ asset('storage/' . $car->gambar_mobil) }}" alt=""
            srcset="">
        <h1 class=" text-4xl font-bold mb-10 md:text-3xl">{{ $car['nama_mobil'] }}</h1>
        <div class="spesifikasi flex w-2xl justify-between mb-10">
            <div class="flex gap-1 items-center">
                <img src="{{ url('img/car-chair 1.svg') }}" alt="seaters" class="w-10 h-10">
                <p class="text-md">{{ $car['seater'] }}</p>
            </div>
            <div class="flex gap-1 items-center">
                <img src="{{ url('img/gas-station 1.svg') }}" alt="seaters" class="w-10 h-10">
                <p class="text-md">{{ $car['bahan_bakar'] }}</p>
            </div>
            <div class="flex gap-1 items-center">
                <img src="{{ url('img/gearbox 1.svg') }}" alt="seaters" class="w-10 h-10">
                <p class="text-md">{{ $car['tipe'] }}</p>
            </div>
        </div>
        <table class="table-auto w-2xl border-solid mb-8">
            <thead class=" bg-blue-700 text-white border border-solid border-black">
                <tr>
                    <th class="border border-solid border-black text-xl">Duration</th>
                    <th class="border border-solid border-black text-xl">Price</th>
                </tr>
            </thead>
            <tbody class="border border-solid border-black">
                @foreach ($car->prices as $price)
                    <tr>
                        <td class="border border-solid border-black text-center text-xl">{{ $price->durasi }}</td>
                        <td class="border border-solid border-black text-center text-xl">
                            Rp. {{ number_format($price->harga, 0, ',', '.') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex gap-5">
            <a href="/cars"
                class="px-25 py-1 border-2 border-blue-700 rounded-4xl text-xl text-blue-700 font-bold">Back</a>
            <a href="{{ route('booking.create', ['id' => $car->id]) }}"
                class="px-25 py-1 border-2 bg-blue-700 border-blue-700 rounded-4xl text-xl text-white font-bold">Book a
                car</a>
        </div>
    </section>
    <x-footer></x-footer>
</body>

</html>
