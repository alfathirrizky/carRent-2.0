<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

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
        ]);

        // Simpan ke database
        Booking::create($validated);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Booking berhasil disimpan!');
    }
}
