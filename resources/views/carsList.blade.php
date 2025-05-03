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
    <section class="m-5 gap-5 flex-wrap">
        <div class="grid grid-cols-3 grid-rows-2 gap-4">
            @foreach ($cars as $car)
                <div class="flex flex-col gap-5 bg-white rounded-2xl shadow-xl p-5">
                    <div class="img">{{ $car['gambar_mobil'] }}</div>
                    <div class="flex justify-between items-center">
                        <h1 class=" text-2xl font-bold">{{ $car['nama_mobil'] }}</h1>
                        <label class=" bg-blue-400 text-white font-medium p-1 px-6 text-xs rounded-2xl"
                            for="">{{ $car['kategori'] }}</label>
                    </div>
                    <div class="flex gap-5 mb-7">
                        <img src="{{ url('img/bahan bakar.svg') }}" alt="seaters" class="w-10 h-10">
                        <img src="{{ url('img/bahan bakar.svg') }}" alt="seaters" class="w-10 h-10">
                        <img src="{{ url('img/bahan bakar.svg') }}" alt="seaters" class="w-10 h-10">
                    </div>
                    <div class=" flex justify-between">
                        <p class=" text-md font-medium">{{ $car['harga'] }}</p>
                        <button class=" text-sm bg-blue-700 text-white text-md font-medium px-5 py-1 rounded-2xl"> Book
                            a
                            car</button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <x-footer></x-footer>
</body>

</html>
