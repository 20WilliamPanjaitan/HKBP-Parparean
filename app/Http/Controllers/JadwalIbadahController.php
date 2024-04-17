<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalIbadahController extends Controller
{
    public function index(){
        return view('jadwal_ibadah');
    }
}
