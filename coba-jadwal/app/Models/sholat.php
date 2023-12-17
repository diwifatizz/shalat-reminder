<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sholat extends Model
{
    use HasFactory;

    protected $table = 'jadwal_sholat';

    protected $fillable = [
        'lokasi',
        'tanggal',
        'imsak',
        'subuh',
        'terbit',
        'dhuha',
        'dzuhur',
        'ashar',
        'maghrib',
        'isya',
    ];

    public function kota()
    {
        return $this->belongsTo(City::class, 'tanggal');
    }
}
