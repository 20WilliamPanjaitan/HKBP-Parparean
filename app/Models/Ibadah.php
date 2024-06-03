<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibadah extends Model
{
    protected $table = 'ibadah';

    public function ibadah()
    {
        return $this->belongsTo(Ibadah::class, 'id');
    }

    public function tataIbadah()
    {
        return $this->hasOne(Tata_Ibadah::class, 'id_ibadah');
    }
}
