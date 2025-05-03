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
    <section class="flex justify-center items-center flex-col gap-5 my-5">
        <h1 class="text-4xl font-bold">Booking</h1>
        <div class="bookForm rounded-3xl bg-blue-700 w-4xl flex flex-col items-center p-15 gap-3">
            <div class="input flex flex-col gap-2">
                <h1 class="px-3 font-medium text-md text-white">Nama Lengkap</h1>
                <input class="w-2xl rounded-xl" type="text" value="" placeholder="Nama">
            </div>
            <div class="input flex flex-col gap-2">
                <h1 class="px-3 font-medium text-md text-white">Nomer Telepon</h1>
                <input class="w-2xl rounded-xl" type="text" value="" placeholder="0857xxxxxx">
            </div>
            <div class="input flex flex-col gap-2">
                <h1 class="px-3 font-medium text-md text-white">Mobil</h1>
                <input class="w-2xl rounded-xl" type="text" value="" placeholder="Toyota Innova">
            </div>
            <div class="input flex flex-col gap-2 mb-5">
                <h1 class="px-3 font-medium text-md text-white">Durasi</h1>
                <input class="w-2xl rounded-xl" type="text" value="" placeholder="12 Jam">
            </div>
            <button class=" bg-white px-32 py-1 text-xl font-medium rounded-2xl">Book a car</button>
        </div>
    </section>
    <x-footer></x-footer>
    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
