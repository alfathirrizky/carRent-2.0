<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar></x-navbar>
    <section class="m-5 flex-wrap pt-20">
        <div class="grid grid-cols-2 gap-2 md:grid-cols-2 lg:grid-cols-4">
            @foreach ($cars as $car)
                <div class="min-w-full flex-shrink-0 flex flex-col gap-5 bg-white rounded-2xl shadow-xl p-5 snap-center">
                    <div class="flex items-center justify-center">
                        <img class="w-full h-40 object-contain" src="{{ asset('storage/' . $car->gambar_mobil) }}"
                            alt="">
                    </div>
                    <div class="flex justify-between items-center">
                        <h1 class="text-lg font-bold truncate">{{ $car['nama_mobil'] }}</h1>
                        <span class="bg-blue-400 text-white font-medium px-3 py-1 text-xs rounded-2xl">
                            {{ $car['kategori'] }}
                        </span>
                    </div>
                    <div class="flex gap-3 mb-4 text-xs">
                        <div class="flex gap-1 items-center">
                            <img src="{{ url('img/car-chair 1.svg') }}" class="w-4 h-4" alt="seater">
                            <span>{{ $car['seater'] }}</span>
                        </div>
                        <div class="flex gap-1 items-center">
                            <img src="{{ url('img/gas-station 1.svg') }}" class="w-4 h-4" alt="fuel">
                            <span>{{ $car['bahan_bakar'] }}</span>
                        </div>
                        <div class="flex gap-1 items-center">
                            <img src="{{ url('img/gearbox 1.svg') }}" class="w-4 h-4" alt="tipe">
                            <span>{{ $car['tipe'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <a href="/car detail/{{ $car['id'] }}"
                            class="text-xs bg-blue-700 text-white font-medium px-4 py-1 rounded-2xl">
                            See Detail
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <x-footer></x-footer>
</body>

</html>
