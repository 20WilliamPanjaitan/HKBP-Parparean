<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seksi extends Model
{
    protected $table = 'seksi';

    public function keanggotaan()
    {
        return $this->hasMany(Keanggotaan::class, 'id_seksi');
    }

    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class, 'id_seksi');
    }
}

