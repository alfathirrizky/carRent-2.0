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
    <section class=" flex flex-col items-center pt-20 pb-5">
        <h1 class=" text-2xl font-bold text-blue-700 md:text-3xl lg:text-4xl">Our Location</h1>
        <p class=" text-md font-medium mb-5 md:text-lg">Jl.Ahmad ausyah maulana</p>
            <iframe class=" w-lg h-96 px-7 rounde-2xl mb-7 md:w-2xl lg:w-4xl"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.383096811518!2d106.82274541476967!3d-6.175392795528637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3eecae45eb9%3A0x301576d14febd40!2sMonas!5e0!3m2!1sid!2sid!4v1651234567890!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        <button type="button"
            class="text-white w-sm bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 cursor-pointer lg:w-2xl">See
            on map</button>
    </section>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
