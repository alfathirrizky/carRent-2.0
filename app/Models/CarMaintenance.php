<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarMaintenance extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'tanggal_service',
        'harga',
        'bukti_bayar'
    ];
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }

}
