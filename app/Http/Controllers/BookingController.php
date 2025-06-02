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

        // dd($request);
        // Validasi data
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'telepon' => 'required|string|max:20',
            'mobil' => 'required|string|max:100',
            'durasi_harga' => 'required|string',
            'metode_pembayaran' => 'required|in:cash,transfer',
            'tanggal_booking' => 'required|date'
        ]);
        list($durasi, $harga) = explode('|', $request->durasi_harga);
        // Simpan ke database
        Booking::create([
            'nama' => $validated['nama'],
            'telepon' => $validated['telepon'],
            'mobil' => $validated['mobil'],
            'durasi' => $durasi,
            'harga' => $harga,
            'metode_pembayaran' => $validated['metode_pembayaran'],
            'tanggal_booking' => $validated['tanggal_booking'],
        ]);
        // Redirect dengan pesan sukses
        return redirect('/')->with('success', true);
    }
    public function create($id)
    {
        $car = Car::findOrFail($id);
        $prices = Price::where('car_id', $id)->get();
        return view('bookingPage', compact('car', 'prices'));
    }
}
