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
        <div class="grid grid-rows gap-4 md:grid-cols-2 lg:grid-cols-4">
            @foreach ($cars as $car)
                <div class="flex flex-col gap-5 bg-white rounded-2xl shadow-xl p-5">
                    <div class="flex items-center justify-center">
                        <img class="w-70 h-50 object-contain" src="{{ asset('storage/' . $car->gambar_mobil) }}"
                            alt="" srcset="">
                    </div>
                    <div class="flex justify-between items-center">
                        <h1 class=" text-2xl font-bold">{{ $car['nama_mobil'] }}</h1>
                        <label class=" bg-blue-400 text-white font-medium p-1 px-6 text-xs rounded-2xl"
                            for="">{{ $car['kategori'] }}</label>
                    </div>
                    <div class="flex gap-3 mb-7">
                        <div class="flex gap-1 items-center">
                            <img src="{{ url('img/car-chair 1.svg') }}" alt="seaters" class="w-5 h-5">
                            <p class="text-xs">{{ $car['seater'] }}</p>
                        </div>
                        <div class="flex gap-1 items-center">
                            <img src="{{ url('img/gas-station 1.svg') }}" alt="seaters" class="w-5 h-5">
                            <p class="text-xs">{{ $car['bahan_bakar'] }}</p>
                        </div>
                        <div class="flex gap-1 items-center">
                            <img src="{{ url('img/gearbox 1.svg') }}" alt="seaters" class="w-5 h-5">
                            <p class="text-xs">{{ $car['tipe'] }}</p>
                        </div>
                    </div>
                    <div class=" flex justify-end">
                        <a href="/car detail/{{ $car['id'] }}"
                            class=" text-sm bg-blue-700 text-white text-md font-medium px-5 py-1 rounded-2xl">See
                            Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <x-footer></x-footer>
</body>

</html>
