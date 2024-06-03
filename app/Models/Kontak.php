<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table = 'kontaks';
    // Jika ada kolom yang dapat diisi (mass assignable), tambahkan di sini
    protected $fillable = ['youtube', 'facebook', 'instagram', 'twitter'];
}
