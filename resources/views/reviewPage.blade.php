<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Review</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar></x-navbar>
    <section class="m-5">
        <div class="testimoniCard p-5 bg-white rounded-lg flex flex-col gap-5 items-center">
            <p class=" text-md text-center">bagus</p>
            <div class="profile flex items-center gap-2">
                <div class=" h-8 w-8 bg-blue-900 rounded-4xl"></div>
                {{-- <img src="{{ url('img/inova.png') }}" alt="profile" srcset="" class="h-4 w-4 rounded-4xl">
                --}}
                <h1 class=" font-semibold">Alfathir</h1>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>