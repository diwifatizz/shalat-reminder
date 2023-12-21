<?php

// app/Models/JadwalShalat.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prayer extends Model
{
    protected $table = 'prayer';
    protected $fillable = [
        'date',
        'regency_id',
        'fajr',
        'sunrise',
        'dhuhr',
        'asr',
        'sunset',
        'maghrib',
        'isha',
        'imsak',
    ];

    public function regency()
    {
        return $this->belongsTo(Regency::class, 'regency_id');
    }
}
