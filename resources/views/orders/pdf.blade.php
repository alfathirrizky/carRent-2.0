<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Detail Booking</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9fafb;
            color: #111827;
            padding: 2rem;
        }

        .card {
            background-color: white;
            padding: 2rem;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }

        h2 {
            font-size: 1.75rem;
            margin-bottom: 1rem;
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 0.5rem;
            color: #2563eb;
        }

        .row {
            margin-bottom: 0.75rem;
        }

        .label {
            display: inline-block;
            width: 180px;
            font-weight: 600;
            color: #374151;
        }

        .value {
            color: #111827;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Detail Order</h2>

        <div class="row"><span class="label">Nama:</span> <span class="value">{{ $booking->nama }}</span></div>
        <div class="row"><span class="label">No. Telepon:</span> <span class="value">{{ $booking->telepon }}</span>
        </div>
        <div class="row"><span class="label">Mobil:</span> <span class="value">{{ $booking->mobil }}</span></div>
        <div class="row"><span class="label">Transmisi:</span> <span class="value">{{ $booking->transmisi }}</span>
        </div>
        <div class="row"><span class="label">Durasi:</span> <span class="value">{{ $booking->durasi }}</span></div>
        <div class="row"><span class="label">Tanggal Booking:</span>
            <span
                class="value">{{ \Carbon\Carbon::parse($booking->tanggal_booking)->translatedFormat('d M Y') }}</span>
        </div>
        <div class="row"><span class="label">Jumlah Pembayaran:</span>
            <span class="value">Rp{{ number_format($booking->harga, 0, ',', '.') }}</span>
        </div>
        <div class="row"><span class="label">Metode Pembayaran:</span> <span
                class="value">{{ $booking->metode_pembayaran }}</span></div>
    </div>
</body>

</html>
