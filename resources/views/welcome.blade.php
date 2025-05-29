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
    <section class="bg-center bg-no-repeat bg-[url('/public/img/hero.png')] p-20">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-white lg:text-5xl">
                Looking to save more on
                your rental car?</h1>
            <p class="mb-8 text-sm font-normal text-gray-300 md:text-lg lg:text-2xl">Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Aperiam, quidem repellendus voluptas necessitatibus perspiciatis,
                error quae minima commodi sit labore iste sed. Natus voluptatem quas
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="{{ url('/admin') }}"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#chooseUs"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>
            </div>
        </div>
    </section>
    {{-- why choose us --}}
    {{-- <section id="chooseUs" class="flex flex-col items-center justify-center m-8 gap-6">
        <h1 class="text-4xl font-bold">Why choose us</h1>
        <div class="flex flex-row xs:flex-col lg:flex-row">
            <div class="text1 w-xl flex flex-col justify-start py-10 gap-15" data-aos="fade-right">
                <div>
                    <h2 class=" text-xl font-bold">Armada Terawat & Beragam</h2>
                    <p>Kami menyediakan berbagai jenis kendaraan, mulai dari city car hingga kendaraan premium, yang
                        selalu
                        dalam kondisi prima dan rutin diservis.</p>
                </div>
                <div>
                    <h2 class="text-xl font-bold">Armada Terawat & Beragam</h2>
                    <p>Kami menyediakan berbagai jenis kendaraan, mulai dari city car hingga kendaraan premium, yang
                        selalu
                        dalam kondisi prima dan rutin diservis.</p>
                </div>
            </div>
            <div class="content w-40 bg-blue-900 rounded-3xl flex flex-col justify-between py-10 gap-10">
                <img class="w-2xl" src="{{ url('img/inova.png') }}" alt="" srcset="" data-aos="zoom-in">
                <img src="{{ url('img/jazz.png') }}" alt="" srcset=""data-aos="zoom-in">
            </div>
            <div class="text2 w-xl flex flex-col justify-start py-10 gap-15 text-right" data-aos="fade-left">
                <div>
                    <h2 class=" text-xl font-bold">Armada Terawat & Beragam</h2>
                    <p>Kami menyediakan berbagai jenis kendaraan, mulai dari city car hingga kendaraan premium, yang
                        selalu
                        dalam kondisi prima dan rutin diservis.</p>
                </div>
                <div>
                    <h2 class=" text-xl font-bold">Armada Terawat & Beragam</h2>
                    <p>Kami menyediakan berbagai jenis kendaraan, mulai dari city car hingga kendaraan premium, yang
                        selalu
                        dalam kondisi prima dan rutin diservis.</p>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- frequently asked --}}
    <section id="question" class="my-10 flex flex-col justify-center items-center gap-10 md:flex-row lg:gap-25">
        <div class="img">
            <div class=" bg-blue-900 w-md py-5 rounded-3xl flex items-center lg:w-2xl">
                <img src="{{ url('img/fortuner.png') }}" alt="" srcset="" class="w-sm ml-20 lg:w-2xl">
            </div>
        </div>
        <div class="textContent flex flex-col items-center justify-center">
            <div class=" text-center md:text-start">
                <h1 class=" text-blue-700 text-lg font-bold">Frequently asked questions</h1>
                <h1 class=" text-xl font-bold w-xl mb-4">Everything you need to know about our services</h1>
            </div>
            <div>     
                <div id="accordion-open" data-accordion="open" class="w-md items-center lg:w-xl">
                    <h2 id="accordion-open-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 gap-3"
                            data-accordion-target="#accordion-open-body-1" aria-expanded="true"
                            aria-controls="accordion-open-body-1">
                            <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                        clip-rule="evenodd"></path>
                                </svg>What do i need to rent a car?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                        <div class="p-5 border border-b-0 border-gray-200">
                            <p class="mb-2 text-gray-500">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Minus, impedit. Sed laborum sint enim pariatur consectetur quibusdam omnis
                                ex nulla eveniet possimus mollitia rem fuga delectus veniam eius at soluta, error</p>
                        </div>
                    </div>
                    <h2 id="accordion-open-heading-2">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 gap-3"
                            data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                            aria-controls="accordion-open-body-2">
                            <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                        clip-rule="evenodd"></path>
                                </svg>What do i need to rent a car?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                        <div class="p-5 border border-b-0 border-gray-200">
                            <p class="mb-2 text-gray-500">Flowbite is first conceptualized and designed
                                using the Figma software so everything you see in the library has a design equivalent in our
                                Figma file.</p>
                            <p class="text-gray-500">Check out the <a href="https://flowbite.com/figma/"
                                    class="text-blue-600 hover:underline">Figma design system</a> based
                                on the utility classes from Tailwind CSS and components from Flowbite.</p>
                        </div>
                    </div>
                    <h2 id="accordion-open-heading-3">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 gap-3"
                            data-accordion-target="#accordion-open-body-3" aria-expanded="false"
                            aria-controls="accordion-open-body-3">
                            <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                        clip-rule="evenodd"></path>
                                </svg> What do i need to rent a car?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                        <div class="p-5 border border-t-0 border-gray-200">
                            <p class="mb-2 text-gray-500">The main difference is that the core
                                components from Flowbite are open source under the MIT license, whereas Tailwind UI is a
                                paid product. Another difference is that Flowbite relies on smaller and standalone
                                components, whereas Tailwind UI offers sections of pages.</p>
                            <p class="mb-2 text-gray-500">However, we actually recommend using both
                                Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you
                                from using the best of two worlds.</p>
                            <p class="mb-2 text-gray-500">Learn more about these technologies:</p>
                            <ul class="ps-5 text-gray-500 list-disc">
                                <li><a href="https://flowbite.com/pro/" class="text-blue-600 hover:underline">Flowbite
                                        Pro</a></li>
                                <li><a href="https://tailwindui.com/" rel="nofollow"
                                        class="text-blue-600 hover:underline">Tailwind UI</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- car list --}}
    <section id="mostRent" class="m-5 flex flex-col gap-5 flex-wrap snap-x">
        <div class="text flex justify-between items-center">
            <h1 class=" text-2xl font-bold">Most Frequently Rented</h1>
            <a href="cars" class="text-md font-medium text-blue-700">See all cars</a>
        </div>
        <div class="grid grid-rows gap-4 md:grid-cols-2 lg:grid-cols-4">
            @foreach ($cars->take(4) as $car)
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
    {{-- testimoni --}}
    <section id="testimoni" class="p-8 m-5 my-9 bg-blue-900 rounded-lg flex flex-col gap-5">
        <div class="text flex items-end justify-between">
            <div>
                <h3 class="text-white text-md font-semibold lg:text-xl">Testimonials</h3>
                <h1 class="text-white text-xl font-bold lg:text-4xl">Customers review</h1>
            </div>
            <div>
                <a href="/review" class="bg-white px-4 py-1 text-xs text-blue-800 rounded-2xl font-semibold md:text-base lg:text-lg">See All Review</a>
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
