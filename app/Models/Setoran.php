<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setoran extends Model
{
    use HasFactory;
    protected $fillable = [
        'driver_id',
        'car_id',
        'tanggal_Setoran',
        'harga'
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
