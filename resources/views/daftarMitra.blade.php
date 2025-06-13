<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mitra</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar></x-navbar>
    <section class="flex justify-center items-center flex-col gap-5 pt-20 px-5 mb-5 lg:px">

        <h1 class="text-2xl font-bold">Form Daftar Kemitraan</h1>

        @if (session('success'))
            <div class="text-green-500 font-bold">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('driver.store') }}" enctype="multipart/form-data"
            class="bookForm rounded-3xl bg-blue-700 w-full max-w-xl flex flex-col items-center p-8 gap-4">
            @csrf

            <div class="input w-full flex flex-col gap-2">
                <label class="px-3 font-medium text-md text-white">Nama Lengkap</label>
                <input class="w-full rounded-xl p-2" type="text" name="nama" placeholder="Tulis Nama Anda">
            </div>
            <div class="input w-full flex flex-col gap-2">
                <label class="px-3 font-medium text-md text-white">Nomer Telepon</label>
                <input class="w-full rounded-xl p-2" type="text" name="no_telepon"
                    placeholder="Tulis No.Telepon Anda">
            </div>
            <div class="input w-full flex flex-col gap-2">
                <label class="px-3 font-medium text-md text-white">Jenis Kelamin</label>
                <select id="cars" name="jns_kelamin" placeholder="Pria" class="w-full rounded-xl p-2">
                    <option value="pria">Pria</option>
                    <option value="wanita">Perempuan</option>
                </select>
            </div>
            <div class="input w-full flex flex-col gap-2">
                <label class="px-3 font-medium text-md text-white">Alamat</label>
                <input class="w-full rounded-xl p-2" type="text" name="alamat" placeholder="Tulis Alamat Anda">
            </div>
            <div class="input w-full flex flex-col gap-2">
                <label class="px-3 font-medium text-md text-white">Umur</label>
                <input class="w-full rounded-xl p-2" type="text" name="umur" placeholder="Tulis Umur Anda">
            </div>
            <div class=" w-full mx-auto">
                <label class="block mb-2 text-sm font-medium text-white" for="user_avatar">Upload
                    file</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                    aria-describedby="user_avatar_help" id="user_avatar" type="file" name="data_diri">
            </div>
            <button type="submit"
                class="bg-white text-blue-700 px-10 py-2 text-base font-semibold rounded-3xl hover:bg-gray-100 cursor-pointer mt-3">
                Submit Review
            </button>
        </form>
    </section>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
