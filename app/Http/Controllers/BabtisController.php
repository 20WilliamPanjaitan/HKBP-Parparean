<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BabtisController extends Controller
{
    public function index()
    {
        return view(
            'babtis',
            [
                "title" => "layanan"
            ]
        );
    }
}
