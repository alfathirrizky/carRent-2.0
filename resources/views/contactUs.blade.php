<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar></x-navbar>
    <section class=" flex flex-col items-center gap-5 m-5 pt-20">
        @foreach ($admins as $admin)
            <div
                class="flex flex-row justify-between items-center bg-white rounded-4xl shadow-md p-5 gap-10 w-md md:w-lg xl:w-2xl">
                <div class=" flex flex-row gap-5 items-center">
                    <img src="{{ url('img/jazz.png') }}" alt="" class=" w-20 h-20 rounded-4xl">
                    <div>
                        <h1 class=" font-bold">{{ $admin['nama'] }}</h1>
                        <p class=" font-medium">{{ $admin['no_telepon'] }}1</p>
                    </div>
                </div>
                <a href="{{ $admin['link_whatsapp'] }}"
                    class=" bg-blue-700 p-2 px-5 text-xs rounded-4xl text-white md:text-base">chat admin</a>
            </div>
        @endforeach
    </section>
    <x-footer></x-footer>
</body>

</html>
