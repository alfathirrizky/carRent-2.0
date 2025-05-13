<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Mobil</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white text-gray-900">
    <x-navbar></x-navbar>

    <section class="flex justify-center items-center flex-col gap-5 mt-10 mb-5">

        <h1 class="text-4xl font-bold">Booking Car</h1>

        @if(session('success'))
            <div class="text-green-500 font-bold">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('booking.store') }}"
            class="bookForm rounded-3xl bg-blue-700 w-full max-w-xl flex flex-col items-center p-8 gap-4">
            @csrf

            <div class="input w-full flex flex-col gap-2">
                <label class="px-3 font-medium text-md text-white">Nama Lengkap</label>
                <input class="w-full rounded-xl p-2" type="text" name="nama" placeholder="Tulis Nama Lengkap Anda">
            </div>

            <div class="input w-full flex flex-col gap-2">
                <label class="px-3 font-medium text-md text-white">Nomor Telepon</label>
                <input class="w-full rounded-xl p-2" type="text" name="telepon" placeholder="0857xxxxxxx">
            </div>

            <div class="input w-full flex flex-col gap-2">
                <label class="px-3 font-medium text-md text-white">Mobil</label>
                <input class="w-full rounded-xl p-2" type="text" name="mobil" placeholder="Toyota Innova">
            </div>

            <div class="input w-full flex flex-col gap-2 mb-4">
                <label class="px-3 font-medium text-md text-white">Durasi</label>
                <input class="w-full rounded-xl p-2" type="text" name="durasi" placeholder="12 Jam">
            </div>

            <button type="submit"
                class="bg-white text-blue-700 px-10 py-2 text-xl font-semibold rounded-3xl hover:bg-gray-100">
                Book a car
            </button>
        </form>
    </section>

    <x-footer></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>