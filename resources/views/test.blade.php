<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <x-navbar></x-navbar>
    <section class="bg-center bg-no-repeat bg-[url('/public/img/hero.png')]">
        <div class=" px-20 py-36 flex flex-col gap-3">
            <h1 class="text-center text-2xl text-white font-extrabold">Looking to save more on
                your rental car?</h1>
            <p class="text-center text-xs text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
                quidem repellendus voluptas necessitatibus perspiciatis, error quae minima commodi sit labore iste sed.
                Natus voluptatem quas</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="{{ url('/admin') }}"
                    class="inline-flex justify-center items-center py-2 px-3 text-xs font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#chooseUs"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-2 px-3 sm:ms-4 text-xs font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>
            </div>
        </div>
    </section>
    <section id="chooseUs" class="flex flex-col items-center justify-center gap-5 py-10 px-5">
        <div class="text">
            <h1 class=" text-4xl font-bold">Why choose us</h1>
        </div>
        <div class="grid grid-cols gap-2 md:grid-cols-2 lg:grid-cols-4">
            <div class=" bg-white flex shadow-xl rounded-3xl items-center justify-center gap-3 p-5 lg:p-7 lg:flex-col">
                <img src="{{ url('img/affordable.png') }}" alt="" srcset="" class=" w-20 lg:w-30">
                <div>
                    <h1 class=" font-bold text-blue-900 text-base lg:text-lg lg:text-center">Harga Transparan &
                        Kompetitif</h1>
                    <p class=" text-black text-xs lg:text-sm lg:text-center">Kami menawarkan harga yang jujur dan
                        bersaing tanpa biaya tersembunyi, sehingga Anda bisa menikmati perjalanan dengan tenang.</p>
                </div>
            </div>
            <div
                class=" bg-white flex flex-row-reverse shadow-xl rounded-3xl items-center justify-center gap-3 p-5 lg:p-7 lg:flex-col">
                <img src="{{ url('img/car.png') }}" alt="" srcset="" class=" w-20 lg:w-30">
                <div>
                    <h1 class=" font-bold text-blue-900 text-base lg:text-lg lg:text-center">Armada Terawat & Beragam
                    </h1>
                    <p class=" text-black text-xs lg:text-sm lg:text-center">Kami menyediakan berbagai jenis kendaraan,
                        mulai dari city car hingga kendaraan premium, yang selalu dalam kondisi prima dan rutin
                        diservis.</p>
                </div>
            </div>
            <div class=" bg-white flex shadow-xl rounded-3xl items-center justify-center gap-3 p-5 lg:p-7 lg:flex-col">
                <img src="{{ url('img/pelayanan.png') }}" alt="" srcset="" class=" w-20 lg:w-30">
                <div>
                    <h1 class=" font-bold text-blue-900 text-base lg:text-lg lg:text-center">Pelayanan Profesional</h1>
                    <p class=" text-black text-xs lg:text-sm lg:text-center">Tim kami siap memberikan layanan terbaik
                        dengan respons cepat, ramah, dan profesional untuk memastikan kepuasan pelanggan.</p>
                </div>
            </div>
            <div
                class=" bg-white flex flex-row-reverse shadow-xl rounded-3xl justify-center items-center gap-3 p-5 lg:p-7 lg:flex-col">
                <img src="{{ url('img/fleksibel.png') }}" alt="" srcset="" class=" w-20 lg:w-30">
                <div>
                    <h1 class=" font-bold text-blue-900 text-base lg:text-lg lg:text-center">Fleksibilitas & Kemudahan
                    </h1>
                    <p class=" text-black text-xs lg:text-sm lg:text-center">Proses pemesanan yang mudah dan fleksibel
                        dengan berbagai pilihan
                        sewa harian, mingguan, atau bulanan sesuai kebutuhan Anda.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="mostRent" class="m-5 flex flex-col gap-5 flex-wrap snap-x">
        <div class="text flex justify-between items-center">
            <h1 class=" text-2xl font-bold lg:text-3xl">Most Frequently Rented</h1>
            <a href="cars" class="text-md font-medium text-blue-700 lg:text-lg hover:underline">See all cars</a>
        </div>
        <div class="grid grid-rows gap-4 md:grid-cols-2 lg:grid-cols-4">
            {{-- @foreach ($cars->take(4) as $car) --}}
                <div class="flex flex-col gap-5 bg-white rounded-2xl shadow-xl p-5">
                    <div class="flex items-center justify-center">
                        <img class="w-70 h-50 object-contain" src="{"
                            alt="" srcset="">
                    </div>
                    <div class="flex justify-between items-center">
                        <h1 class=" text-2xl font-bold">innova</h1>
                        <label class=" bg-blue-400 text-white font-medium p-1 px-6 text-xs rounded-2xl"
                            for="">mpv</label>
                    </div>
                    <div class="flex gap-3 mb-7">
                        <div class="flex gap-1 items-center">
                            <img src="{{ url('img/car-chair 1.svg') }}" alt="seaters" class="w-5 h-5">
                            <p class="text-xs">7 seater</p>
                        </div>
                        <div class="flex gap-1 items-center">
                            <img src="{{ url('img/gas-station 1.svg') }}" alt="seaters" class="w-5 h-5">
                            <p class="text-xs">bensin</p>
                        </div>
                        <div class="flex gap-1 items-center">
                            <img src="{{ url('img/gearbox 1.svg') }}" alt="seaters" class="w-5 h-5">
                            <p class="text-xs">matic</p>
                        </div>
                    </div>
                    <div class=" flex justify-end">
                        <a href=""
                            class=" text-sm bg-blue-700 text-white text-md font-medium px-5 py-1 rounded-2xl">See
                            Detail</a>
                    </div>
                </div>
            {{-- @endforeach --}}
        </div>
    </section>
    <section id="testimoni" class="p-8 m-5 my-9 bg-blue-900 rounded-lg flex flex-col gap-5">
        <div class="text flex items-end justify-between">
            <div>
                <h3 class="text-white text-md font-semibold lg:text-xl">Testimonials</h3>
                <h1 class="text-white text-xl font-bold lg:text-4xl">Customers review</h1>
            </div>
            <div>
                <a href="/review"
                    class="bg-white px-4 py-1 text-xs text-blue-800 rounded-2xl font-semibold md:text-base lg:text-lg">See
                    All Review</a>
            </div>
        </div>
        <div class="grid grid-cols gap-4 md:grid-cols-2 lg:grid-cols-3">
            {{-- @foreach ($reviews->take(3) as $review) --}}
            <div class="testimoniCard p-5 bg-white rounded-lg flex flex-col gap-5 items-center shadow-xl">
                <p class=" text-md text-center">hai</p>
                <div class="profile flex items-center gap-2">
                    <h1 class=" font-semibold">alfathir</h1>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>
