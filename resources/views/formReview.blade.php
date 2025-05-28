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
    <section class="flex justify-center items-center flex-col gap-5 mt-10 mb-5 p-9">

        <h1 class="text-4xl font-bold">Share your journey!</h1>

        @if (session('success'))
            <div class="text-green-500 font-bold">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('testimoni.store') }}"
            class="bookForm rounded-3xl bg-blue-700 w-full max-w-xl flex flex-col items-center p-8 gap-4">
            @csrf

            <div class="input w-full flex flex-col gap-2">
                <label class="px-3 font-medium text-md text-white">Nama</label>
                <input class="w-full rounded-xl p-2" type="text" name="nama"
                    placeholder="Tulis Nama Anda">
            </div>

            <div class="input w-full flex flex-col gap-2 mb-5">
                <label class="px-3 font-medium text-md text-white">Testimoni</label>
                <textarea name="reviews" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Ceritakan pengalaman anda..."></textarea>
            </div>
            <button type="submit"
                class="bg-white text-blue-700 px-10 py-2 text-xl font-semibold rounded-3xl hover:bg-gray-100 cursor-pointer">
                Submit Review
            </button>
        </form>
    </section>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
