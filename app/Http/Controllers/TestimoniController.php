<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function store(Request $request)
    {

        // dd($request);
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'telepon' => 'required|string',
        ]);
        // Simpan ke database
        Review::create($validated);
        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Review berhasil disimpan!');
    }
}
