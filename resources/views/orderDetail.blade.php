<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Detail</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar></x-navbar>
    <section class="flex justify-center pt-15">
        <div class="detail bg-white w-2xl m-5 p-10 shadow-xl rounded-xl flex flex-col gap-3">
            <h1 class="text-xl font-bold">Detail Order</h1>
            <div>
                <label class="text-md font-semibold">Nama</label>
                <p>Alfathir</p>
            </div>
            <div>
                <label class="text-md font-semibold">No.Telepon</label>
                <p>085714128721</p>
            </div>
            <div>
                <label class="text-md font-semibold">Mobil</label>
                <p>Toyota Innova</p>
            </div>
            <div>
                <label class="text-md font-semibold">Transmisi</label>
                <p>Matic</p>
            </div>
            <div>
                <label class="text-md font-semibold">Durasi</label>
                <p>12 Jam</p>
            </div>
            <div>
                <label class="text-md font-semibold">Jumlah Pembayaran</label>
                <p>Rp.1.000.000</p>
            </div>
            <div class="mb-3">
                <label for="countries" class="block mb-2 text-md font-semibold">Metode Pembayaran</label>
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option>Cash</option>
                    <option>Transfer</option>
                </select>
            </div>
            <div class="button flex justify-center gap-3">
                <a href="/" class="bg-blue-800 text-white p-3 px-5 rounded-3xl">Konfirmasi order</a>
                <a href="" class="bg-white border-3 border-blue-900 p-3 px-5 rounded-3xl flex gap-3"><img src="{{ url('img/unduh.png') }}" alt="" srcset="" class="w-5">Download</a>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
