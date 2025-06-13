<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Partnership</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar></x-navbar>
    <section class=" mt-20 m-5">
        <div class="terms flex flex-col items-center bg-white rounded-2xl shadow-xl p-10 gap-3 mt-10">
            <h1 class=" font-bold text-3xl">Terms and conditions</h1>
            <p class=" text-justify text-sm lg:text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam inventore aperiam
                reprehenderit eos
                quidem esse error aliquid animi, delectus illo est repudiandae ullam a earum nemo enim, deserunt tenetur
                ducimus alias. Corrupti, molestiae nisi aspernatur reprehenderit fugit, quisquam totam maxime, tenetur
                eveniet pariatur esse dicta. Libero esse temporibus ipsam excepturi commodi placeat hic mollitia
                doloremque ratione possimus, totam tenetur quo laborum harum beatae natus adipisci distinctio.
                Voluptates, facere! Accusantium consectetur iusto error provident suscipit voluptate perferendis animi
                tempore molestias cupiditate dignissimos corporis voluptates maxime culpa blanditiis libero sunt ut
                expedita atque quidem fugit odit, quisquam harum. Quis quaerat ratione dolores?Lorem ipsum dolor, sit
                amet consectetur adipisicing elit. Aliquam inventore aperiam reprehenderit eos quidem esse error aliquid
                animi, delectus illo est repudiandae ullam a earum nemo enim, deserunt tenetur ducimus alias. Corrupti,
                molestiae nisi aspernatur reprehenderit fugit, quisquam totam maxime, tenetur eveniet pariatur esse
                dicta. Libero esse temporibus ipsam excepturi commodi placeat hic mollitia doloremque ratione possimus,
                totam tenetur quo laborum harum beatae natus adipisci distinctio. Voluptates, facere! Accusantium
                consectetur iusto error provident suscipit voluptate perferendis animi tempore molestias cupiditate
                dignissimos corporis voluptates maxime culpa blanditiis libero sunt ut expedita atque quidem fugit odit,
                quisquam harum. Quis quaerat ratione dolores?Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Aliquam inventore aperiam reprehenderit eos quidem esse error aliquid animi, delectus illo est
                repudiandae ullam a earum nemo enim, deserunt tenetur ducimus alias. Corrupti, molestiae nisi aspernatur
                reprehenderit fugit, quisquam totam maxime, tenetur eveniet pariatur esse dicta. Libero esse temporibus
                ipsam excepturi commodi placeat hic mollitia doloremque ratione possimus, totam tenetur quo laborum
                harum beatae natus adipisci distinctio. Voluptates, facere! Accusantium consectetur iusto error
                provident suscipit voluptate perferendis animi tempore molestias cupiditate dignissimos corporis
                voluptates maxime culpa blanditiis libero sunt ut expedita atque quidem fugit odit, quisquam harum. Quis
                quaerat ratione dolores?</p>
            <a href="{{ url('/formKemitraan') }}"
                class=" bg-blue-900 text-white px-8 py-2 rounded-2xl font-semibold text-base">Daftar
                sebagai mitra</a>
        </div>
        <div class="cars flex flex-col items-center gap-5 mt-10">
            <h1 class=" font-bold text-2xl lg:text-4xl">List Mobil dan setoran</h1>
            <div class="grid grid-cols-2 gap-2 md:grid-cols-2 lg:grid-cols-4">
                @foreach ($cars as $car)
                    <div class="flex flex-col gap-3 bg-white rounded-2xl shadow-sm p-3 lg:p-5">
                        <div class="flex items-center justify-center p-2">
                            <img class="object-contain w-full h-20 lg:h-50 "
                                src="{{ asset('storage/' . $car->gambar_mobil) }}" alt="" srcset="">
                        </div>
                        <div class="flex justify-between items-center">
                            <h1 class=" text-xs font-bold lg:text-2xl">{{ $car['nama_mobil'] }}</h1>
                            <label class=" bg-blue-400 text-white px-2 text-2xs lg:text-base font-medium rounded-2xl"
                                for="">{{ $car['kategori'] }}</label>
                        </div>
                        <div class="flex gap-2 mb-3 lg:mb-7 lg:gap-4">
                            <div class="flex gap-1 items-center">
                                <img src="{{ url('img/car-chair 1.svg') }}" alt="seaters"
                                    class="w-3 h-3 lg:w-6 lg:h-6">
                                <p class="text-3xs lg:text-sm">{{ $car['seater'] }}</p>
                            </div>
                            <div class="flex gap-1 items-center">
                                <img src="{{ url('img/gas-station 1.svg') }}" alt="seaters"
                                    class="w-3 h-3 lg:w-6 lg:h-6">
                                <p class="text-3xs lg:text-sm">{{ $car['bahan_bakar'] }}</p>
                            </div>
                            <div class="flex gap-1 items-center">
                                <img src="{{ url('img/gearbox 1.svg') }}" alt="seaters" class="w-3 h-3 lg:w-6 lg:h-6">
                                <p class="text-3xs lg:text-sm">{{ $car['tipe'] }}</p>
                            </div>
                        </div>
                        <div class=" flex justify-start">
                            @foreach ($car->prices as $price)
                                <p class=" font-semibold text-xs lg:text-lg">Rp.
                                    {{ number_format($price->setoran, 0, ',', '.') }}/day
                                </p>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <x-footer></x-footer>
</body>

</html>
