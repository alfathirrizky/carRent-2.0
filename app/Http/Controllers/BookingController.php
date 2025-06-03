<?php

namespace App\Http\Controllers;

use Id;
use App\Models\Car;
use App\Models\Price;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'telepon' => 'required|string|max:20',
            'mobil_tipe' => 'required|string',
            'durasi_harga' => 'required|string',
            'metode_pembayaran' => 'required|in:cash,transfer',
            'tanggal_booking' => 'required|date'
        ]);

        // Pisahkan durasi dan harga dari field gabungan
        list($durasi, $harga) = explode('|', $request->durasi_harga);
        list($mobil, $tipe) = explode('|', $request->mobil_tipe);

        // Simpan ke database dan ambil hasilnya ke $booking
        $booking = Booking::create([
            'nama' => $validated['nama'],
            'telepon' => $validated['telepon'],
            'mobil' => $mobil,
            'transmisi' => $tipe,
            'durasi' => $durasi,
            'harga' => $harga,
            'metode_pembayaran' => $validated['metode_pembayaran'],
            'tanggal_booking' => $validated['tanggal_booking'],
        ]);

        // Redirect ke detail booking
        return redirect()->route('booking.detail', $booking->id);
    }
    public function create($id)
    {
        $car = Car::findOrFail($id);
        $prices = Price::where('car_id', $id)->get();
        return view('bookingPage', compact('car', 'prices'));
    }

    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return view('orderDetail', compact('booking'));
    }

}
