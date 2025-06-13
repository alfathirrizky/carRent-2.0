<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'reviews' => 'required|string',
        ]);

        Review::create([
            'nama' => $request->nama,
            'reviews' => $request->reviews,
        ]);

        return redirect()->back()->with('success', 'Terima kasih atas testimoni Anda!');
    }

    public function index()
    {
        $reviews = Review::latest()->get();
        return view('reviewPage', compact('reviews'));
    }
}
