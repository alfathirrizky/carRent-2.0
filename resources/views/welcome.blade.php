<!DOCTYPE html>
<html lang="en" class=" scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>car rent</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <x-navbar></x-navbar>
    {{-- jumbo tron --}}
    <section class="bg-center bg-no-repeat bg-[url('/public/img/hero.png')] pt-20">
        <div class=" mx-auto max-w-screen-xl text-center px-5 py-24 lg:py-56">
            <h1 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-white lg:text-5xl">
                Looking to save more on
                your rental car?</h1>
            <p class="mb-8 text-sm font-normal text-gray-300 md:text-lg lg:text-2xl">Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Aperiam, quidem repellendus voluptas necessitatibus perspiciatis,
                error quae minima commodi sit labore iste sed. Natus voluptatem quas
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="{{ url('/admin') }}"
                    class="inline-flex justify-center items-center py-3 px-2 lg:px-10 text-xs font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 lg:text-lg">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#chooseUs"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 lg:px-10 px-2 sm:ms-4 text-xs font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400 lg:text-lg">
                    Learn more
                </a>
            </div>
        </div>
    </section>
    {{-- why choose us --}}
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
    {{-- frequently asked --}}
    <section id="mostQuestion" class="m-5 flex flex-col md:flex-row gap-5">
        <!-- Gambar -->
        <div class="bg-blue-800 rounded-2xl p-3 md:w-1/2 min-h-[200px] flex items-center justify-center">
            <img src="{{ url('img/fortuner.png') }}" alt="Gambar Fortuner" class="w-full max-h-[300px] object-contain">
        </div>

        <!-- Accordion -->
        <div class="flex flex-col gap-2 md:w-1/2 max-h-[400px] overflow-y-auto pr-2">
            <div>
                <p class="text-sm font-bold text-blue-800 lg:text-lg">Frequently asked questions</p>
                <h1 class="text-xl font-bold text-black lg:text-4xl">Everything you need to know about our services</h1>
            </div>

            <!-- Accordion Component -->
            <div id="accordion-flush" data-accordion="collapse"
                data-active-classes="bg-white text-gray-900 dark:text-white"
                data-inactive-classes="text-gray-500 dark:text-gray-400">
                <!-- Accordion Item 1 -->
                <h2 id="accordion-flush-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full py-4 font-medium text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                        data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                        aria-controls="accordion-flush-body-1">
                        <span class=" text-black">What is Flowbite?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-4 border-b border-gray-200 dark:border-gray-700 text-sm">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">
                            Flowbite is an open-source library of interactive components built on top of Tailwind CSS
                            including buttons, dropdowns, modals, navbars, and more.
                        </p>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <h2 id="accordion-flush-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full py-4 font-medium text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                        data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                        aria-controls="accordion-flush-body-2">
                        <span class=" text-black">Is there a Figma file available?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                    <div class="py-4 border-b border-gray-200 dark:border-gray-700 text-sm">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">
                            Flowbite is first conceptualized and designed using the Figma software...
                        </p>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <h2 id="accordion-flush-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full py-4 font-medium text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                        data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                        aria-controls="accordion-flush-body-3">
                        <span class=" text-black">What are the differences between Flowbite and Tailwind UI?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                    <div class="py-4 border-b border-gray-200 dark:border-gray-700 text-sm">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">
                            The main difference is that the core components from Flowbite are open source...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- our service --}}
    <section id="ourService" class=" m-5 lg:m-10 flex flex-col items-center gap-5">
        <h1 class=" text-4xl font-bold">Our Service</h1>
        <div class=" flex flex-col lg:flex-row gap-5">
            <div
                class=" bg-blue-900 p-5 rounded-2xl flex flex-col-reverse gap-2 lg:flex-row justify-center items-center lg:gap-5">
                <div>
                    <h1 class=" text-white font-bold text-xl mb-1 lg:text-2xl">CAR RENTAL</h1>
                    <p class=" text-white text-3xs lg:text-sm mb-1 lg:mb-3 lg:w-md">Rental mobil adalah layanan
                        penyewaan
                        kendaraan roda empat kepada
                        individu atau perusahaan untuk jangka waktu tertentu, dengan biaya sewa yang disepakati. Layanan
                        ini
                        bisa digunakan untuk berbagai keperluan seperti perjalanan pribadi, liburan, perjalanan bisnis,
                        atau
                        operasional perusahaan.</p>
                    <a href="{{ url('/cars') }}"
                        class=" text-blue-900 bg-white text-xs lg:text-base font-medium rounded-2xl px-5">lebih
                        detail</a>
                </div>
                <div>
                    <img src="{{ url('img/deal.jpeg') }}" class="rounded-2xl" alt="">
                </div>
            </div>
            <div
                class=" bg-blue-900 p-5 rounded-2xl flex flex-col-reverse gap-2 lg:flex-row justify-center items-center lg:gap-5">
                <div>
                    <h1 class=" text-white font-bold text-xl mb-1 lg:text-2xl">Partnership</h1>
                    <p class=" text-white text-3xs lg:text-sm mb-1 lg:mb-3 lg:w-md">Rental mobil adalah layanan
                        penyewaan
                        kendaraan roda empat kepada
                        individu atau perusahaan untuk jangka waktu tertentu, dengan biaya sewa yang disepakati. Layanan
                        ini
                        bisa digunakan untuk berbagai keperluan seperti perjalanan pribadi, liburan, perjalanan bisnis,
                        atau
                        operasional perusahaan.</p>
                    <a href="{{ url('/partnership') }}"
                        class=" text-blue-900 bg-white text-xs lg:text-base font-medium rounded-2xl px-5">lebih
                        detail</a>
                </div>
                <div>
                    <img src="{{ url('img/deal.jpeg') }}" class=" w-full h-full rounded-2xl" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- car list --}}
    <section id="mostRent" class="w-full flex flex-col gap-5 px-5">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-bold lg:text-3xl">Most Frequently Rented</h1>
            <a href="/cars" class="text-sm font-medium text-blue-700 hover:underline lg:text-lg">See all cars</a>
        </div>
        <div class="flex overflow-x-auto snap-x snap-mandatory gap-4 scroll-smooth md:grid lg:grid-cols-4">
            @foreach ($cars->take(4) as $car)
                <div
                    class="min-w-full flex-shrink-0 flex flex-col gap-5 bg-white rounded-2xl shadow-xl p-5 snap-center">
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
    {{-- testimoni --}}
    <section id="testimoni" class="p-5 m-5 my-9 bg-blue-900 rounded-lg flex flex-col gap-5">
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
            @foreach ($reviews->take(3) as $review)
                <div class="testimoniCard p-5 bg-white rounded-lg flex flex-col gap-5 items-center shadow-xl">
                    <p class=" text-md text-center">{{ $review->reviews }}</p>
                    <div class="profile flex items-center gap-2">
                        <h1 class=" font-semibold">{{ $review->nama }}</h1>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{-- contact us --}}
    <section id="contactUs" class=" bg-blue-900 p-5 flex flex-col items-center justify-center gap-5">
        <h1 class=" text-white font-bold text-2xl lg:text-4xl">Contact Us</h1>
        <div class="cardContact flex gap-2">
            @foreach ($admins as $admin)
                <div class=" bg-white rounded-2xl shadow-md flex flex-col p-5 items-center">
                    <img src="{{ url('img/fortuner.png') }}" alt="profile" class=" w-30 lg:w-3xs">
                    <h1 class=" font-bold mb-2 lg:text-2xl">{{ $admin['nama'] }}</h1>
                    <a href="{{ $admin['link_whatsapp'] }}"
                        class=" bg-blue-900 text-white font-semibold px-5 rounded-2xl text-base">Chat</a>
                </div>
            @endforeach
        </div>
    </section>
    {{-- location --}}
    <section class=" flex flex-col items-center pt-9 pb-5" id="location">
        <h1 class=" text-2xl font-bold text-blue-700 md:text-3xl lg:text-4xl">Our Location</h1>
        <p class=" text-md font-medium mb-5 md:text-lg">Jl.Ahmad ausyah maulana</p>
        <iframe class=" max-w-full h-96 rounde-2xl mb-5 md:w-2xl lg:w-full"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.383096811518!2d106.82274541476967!3d-6.175392795528637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3eecae45eb9%3A0x301576d14febd40!2sMonas!5e0!3m2!1sid!2sid!4v1651234567890!5m2!1sid!2sid"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <a href="" class=" bg-blue-800 text-white px-5 py-1 font-medium rounded-3xl">See on maps</a>
    </section>
    @if (session('success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-2"
            class="fixed top-4 right-4 z-50 max-w-sm w-full bg-green-500 text-white rounded-xl shadow-lg overflow-hidden">
            <div class="flex items-start p-4">
                <!-- Icon -->
                <svg class="w-6 h-6 mr-3 mt-1 text-white shrink-0" fill="none" stroke="currentColor"
                    stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>

                <!-- Message -->
                <div class="flex-1 text-sm">
                    <p class="font-semibold text-base">Booking berhasil disimpan</p>
                    <p class="text-sm">Admin akan menghubungi nomor Anda.</p>
                </div>
                <!-- Close Button -->
                <button @click="show = false" class="ml-4 text-white hover:text-gray-200 focus:outline-none">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
