<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Testimoni</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar></x-navbar>
    <section class="m-5 flex flex-col gap-5 justify-center pt-20">
        <div class="grid grid-cols-2 gap-2 lg:grid-cols-3">
            @foreach ($reviews as $review)
                <div
                    class="testimoniCard p-5 bg-white rounded-lg flex flex-col gap-1 items-center justify-center shadow-md">
                    <p class=" text-sm text-center lg:text-lg">{{ $review->reviews }}</p>
                    <h1 class=" font-bold text-xs lg:text-base">{{ $review->nama }}</h1>
                </div>
            @endforeach
        </div>
        <div class="btn flex gap-2 justify-center">
            <a href="/" class="border-2 text-blue-800 text-center px-3 py-2 rounded-3xl text-xs lg:text-base">Back to home</a>
            <a href="/testimoni" class="bg-blue-800 text-white text-center px-3 py-2 rounded-3xl text-xs lg:text-base">Share your journey!</a>
        </div>
    </section>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
