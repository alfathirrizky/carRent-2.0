<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'nama',
        'telepon',
        'mobil',
        'durasi',
        'harga',
        'metode_pembayaran',
        'tanggal_booking'
    ];
    public function price()
    {
        return $this->belongsTo(Price::class);
    }
}
