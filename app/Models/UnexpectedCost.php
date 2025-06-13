<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UnexpectedCost extends Model
{
    use HasFactory;
    protected $fillable = [
        'driver_id',
        'car_id',
        'tanggal',
        'jenis_pengeluaran',
        'harga',
        'gambar'
    ];
    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
