<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function download($id)
    {
        $booking = Booking::with('car')->findOrFail($id);

        $pdf = Pdf::loadView('orders.pdf', compact('booking'));

        return $pdf->download('booking-detail-' . $booking->id . '.pdf');
    }
}
