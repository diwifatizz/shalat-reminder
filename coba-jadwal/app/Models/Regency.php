<?php

// app/Models/Regency.php

namespace App\Models;

use AzisHapidin\IndoRegion\Traits\RegencyTrait;
use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    use RegencyTrait;

    protected $table = 'regencies';

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
    