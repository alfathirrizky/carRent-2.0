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
    <section class="m-5 flex flex-col gap-10 justify-center pt-20">
        <div class="grid grid-cols-3 gap-4">
            @foreach ($reviews as $review)
                <div class="testimoniCard p-5 bg-white rounded-lg flex flex-col gap-5 items-center shadow-xl">
                    <p class=" text-xl text-center">{{ $review->reviews }}</p>
                    <div class="profile flex items-center gap-2">
                        <h1 class=" font-bold">{{ $review->nama }}</h1>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="btn flex gap-5 justify-center">
            <a href="/" class="border-2 text-blue-800 text-center w-50 px-4 py-3 rounded-3xl">Back to home</a>
            <a href="/testimoni" class="bg-blue-800 text-white text-center w-50 px-4 py-3 rounded-3xl">Share your
                journey!</a>
        </div>
    </section>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
