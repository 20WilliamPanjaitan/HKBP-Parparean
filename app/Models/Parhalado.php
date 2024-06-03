<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parhalado extends Model
{
    protected $table = 'parhalado';

    public function sektor()
    {
        return $this->belongsTo(Sektor::class, 'id_sektor');
    }
}
