<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $table = 'citi';

    protected $fillable = [
        'id_kota',
        'name',
    ];

    public function jadwalSholat()
    {
        return $this->hasOne(Sholat::class, 'tanggal');
    }
}
