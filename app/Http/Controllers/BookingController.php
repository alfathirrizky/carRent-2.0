<?php

namespace App\Http\Controllers;

use App\Models\Car;
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
            'durasi' => 'required|string|max:50',
            'metode_pembayaran' => 'required|in:cash,transfer',
            'tanggal_booking' => 'required|date'
        ]);

        // // Simpan ke database
        // Booking::create($validated);

        // // Redirect dengan pesan sukses
        // return redirect('/')->with('success', true);

        $booking = Booking::create($validated);
        return redirect()->route('booking.detail', $booking->id);


    }
    public function create($id)
    {
        $car = Car::findOrFail($id);
        return view('bookingPage', compact('car'));
    }

    public function show($id)
{
    $booking = Booking::findOrFail($id);
    return view('orderDetail', compact('booking'));
}

}
