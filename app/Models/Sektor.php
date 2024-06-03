<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sektor extends Model
{
    protected $table = 'sektor';

    public function parhalado()
    {
        return $this->hasMany(Parhalado::class, 'id_sektor');
    }
}
