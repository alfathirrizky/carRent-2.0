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
                <p>{{ $booking->nama }}</p>
            </div>
            <div>
                <label class="text-md font-semibold">No.Telepon</label>
                <p>{{ $booking->telepon }}</p>
            </div>
            <div>
                <label class="text-md font-semibold">Mobil</label>
                <p>{{ $booking->mobil }}</p>
            </div>
            <div>
                <label class="text-md font-semibold">Transmisi</label>
                <p>{{ $booking->transmisi }}</p>
            </div>
            <div>
                <label class="text-md font-semibold">Durasi</label>
                <p>{{ $booking->durasi }}</p>
            </div>
            <div>
                <label class="text-md font-semibold">Tanggal Booking</label>
                <p>{{ \Carbon\Carbon::parse($booking->tanggal_booking)->format('d M Y') }}</p>

            </div>
            <div>
                <label class="text-md font-semibold">Jumlah Pembayaran</label>
                <p>Rp{{ number_format($booking->harga, 0, ',', '.') }}</p>
            </div>  
            <div class="mb-3">
                <label for="countries" class="block mb-2 text-md font-semibold">Metode Pembayaran</label>
                <p>{{$booking->metode_pembayaran}}</p>
            </div>
            <div class="button flex justify-center gap-3">
                <a href="/" class="bg-blue-800 text-white p-3 px-5 rounded-3xl">Konfirmasi order</a>
                <a href="" class="bg-white border-3 border-blue-900 p-3 px-5 rounded-3xl flex gap-3"><img
                        src="{{ url('img/unduh.png') }}" alt="" srcset="" class="w-5">Download</a>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
