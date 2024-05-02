<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KoinoniaController extends Controller
{
    public function index()
    {
        return view(
            'koinonia',
            [
                "title" => "koinonia"
            ]
        );
    }
    
}
