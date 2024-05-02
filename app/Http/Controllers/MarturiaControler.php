<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarturiaControler extends Controller
{
    public function index()
    {
        return view(
            'marturia',
            [
                "title" => "marturia"
            ]
        );
    }
}
