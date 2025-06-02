<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-900">
    <x-navbar />

    <section class="flex justify-center pt-30 pb-10">
        <div class="bg-white w-full max-w-2xl p-10 shadow-xl rounded-xl flex flex-col gap-5">
            <h1 class="text-2xl font-bold text-center">Detail Order</h1>

            <div>
                <label class="text-md font-semibold">Nama</label>
                <p>{{ $booking->nama }}</p>
            </div>

            <div>
                <label class="text-md font-semibold">No. Telepon</label>
                <p>{{ $booking->telepon }}</p>
            </div>

            <div>
                <label class="text-md font-semibold">Mobil</label>
                <p>{{ $booking->mobil }}</p>
            </div>

            <div>
                <label class="text-md font-semibold">Tanggal Booking</label>
                <p>{{ \Carbon\Carbon::parse($booking->tanggal_booking)->format('d M Y') }}</p>
            </div>

            <div>
                <label class="text-md font-semibold">Durasi</label>
                <p>{{ $booking->durasi }}</p>
            </div>

            <div>
                <label class="text-md font-semibold">Metode Pembayaran</label>
                <p>{{ ucfirst($booking->metode_pembayaran) }}</p>
            </div>

            <div class="flex justify-center gap-3 mt-6">
                <a href="/" class="bg-blue-800 text-white p-3 px-5 rounded-3xl">Konfirmasi Order</a>
                <a href="#"
                    class="bg-white border border-blue-800 text-blue-800 p-3 px-5 rounded-3xl flex items-center gap-2">
                    <img src="{{ url('img/unduh.png') }}" alt="Download" class="w-5">
                    Download
                </a>
            </div>
        </div>
    </section>

    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>