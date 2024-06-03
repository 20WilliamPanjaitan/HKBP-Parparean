<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keanggotaan extends Model
{
    protected $table = 'keanggotaan';

    public function seksi()
    {
        return $this->belongsTo(Seksi::class, 'id_seksi');
    }
}
