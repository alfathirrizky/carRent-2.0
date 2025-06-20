<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_mobil',
        'durasi',
        'harga',
        'bahan_bakar',
        'tipe',
        'seater',
        'kategori',
        'gambar_mobil'
    ];

    public function prices(): HasMany
    {
        return $this->hasMany(Price::class);
    }
    public function pricesetorans(): HasMany
    {
        return $this->hasMany(PriceSetoran::class);
    }
    public function cicilan(): HasMany
    {
        return $this->hasMany(cicilan::class);
    }
    public function maintenance(): HasMany
    {
        return $this->hasMany(CarMaintenance::class);
    }
}
