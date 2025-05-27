<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>car rent</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar></x-navbar>
    <section class=" flex flex-col items-center pt-20">
        <h1 class=" text-4xl font-bold text-blue-700">Our Location</h1>
        <p class=" font-medium mb-5">Jl.Ahmad ausyah maulana</p>
        <div class=" bg-blue-700 w-4xl h-96 mb-7 rounded-2xl">
            <iframe class=" w-4xl h-96 rounde-2xl"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.383096811518!2d106.82274541476967!3d-6.175392795528637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3eecae45eb9%3A0x301576d14febd40!2sMonas!5e0!3m2!1sid!2sid!4v1651234567890!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <button type="button"
            class="text-white w-xl bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 cursor-pointer">See
            on map</button>
    </section>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
