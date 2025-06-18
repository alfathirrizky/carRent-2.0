<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'durasi',
        'harga',
    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
    // public function getLabelAttribute()
    // {
    //     return "{$this->durasi} - Rp " . number_format($this->harga, 0, ',', '.');
    // }
}
