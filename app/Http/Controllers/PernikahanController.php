<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PernikahanController extends Controller
{
    public function index()
    {
        return view('pernikahan');
    }
}
