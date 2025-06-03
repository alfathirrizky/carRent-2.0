        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Booking Mobil</title>
            @vite('resources/css/app.css')
            <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        </head>

        <body class="bg-white text-gray-900">
            <x-navbar />

            <section class="flex flex-col items-center justify-center mt-20 mb-10 px-4">
                <h1 class="text-4xl font-bold mb-6">Booking Car</h1>

                {{-- @if (session('success'))
                    <div id="toast-success"
                        class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-xl shadow-lg z-50 hidden">
                        {{ session('success') }}
                    </div>
                @endif --}}

                <form method="POST" action="{{ route('booking.store') }}"
                    class="bg-blue-700 rounded-3xl w-full max-w-xl p-8 flex flex-col gap-5 shadow-lg">
                    @csrf

                    <div class="flex flex-col gap-1">
                        <label class="text-white text-md font-semibold">Nama Lengkap</label>
                        <input class="rounded-xl p-2 text-gray-800" type="text" name="nama"
                            placeholder="Tulis Nama Lengkap Anda" required>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-white text-md font-semibold">Nomor Telepon</label>
                        <input class="rounded-xl p-2 text-gray-800" type="text" name="telepon"
                            placeholder="0857xxxxxxx" required>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-white text-md font-semibold">Mobil</label>
                        <input type="text" name="mobil_tipe" class="rounded-xl p-2 text-gray-800"
                            value="{{ $car->nama_mobil }}|{{ $car->tipe }}" readonly>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="text-white text-md font-semibold">Tanggal Booking</label>
                        <input class="rounded-xl p-2 text-gray-800" type="date" name="tanggal_booking" required>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-white text-md font-semibold">Durasi</label>
                        <select name="durasi_harga" class="rounded-xl p-2 text-gray-800 bg-white border border-gray-300"
                            required>
                            @foreach ($prices as $price)
                                <option value="{{ $price->durasi }}|{{ $price->harga }}">
                                    {{ $price->durasi }} - Rp{{ number_format($price->harga, 0, ',', '.') }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-white text-md font-semibold">Metode Pembayaran</label>
                        <select name="metode_pembayaran"
                            class="rounded-xl p-2 text-gray-800 bg-white border border-gray-300" required>
                            <option value="cash">Cash</option>
                            <option value="transfer">Transfer</option>
                        </select>
                    </div>

                    <div class="flex justify-center gap-4 mt-4">
                        <a href="/cars"
                            class="bg-white text-blue-700 px-6 py-2 text-lg font-semibold rounded-2xl hover:bg-gray-100 transition">
                            Cancel
                        </a>
                        <button type="submit"
                            class="bg-white text-blue-700 px-6 py-2 text-lg font-semibold rounded-2xl hover:bg-gray-100 transition">
                            Book a car
                        </button>
                    </div>
                </form>
            </section>
            <x-footer />
            <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
        </body>

        </html>
