<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'nama',
        'telepon',
        'mobil',
        'transmisi',
        'durasi',
        'harga',
        'metode_pembayaran',
        'tanggal_booking'
    ];
    public function price()
    {
        return $this->belongsTo(Price::class);
    }
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
