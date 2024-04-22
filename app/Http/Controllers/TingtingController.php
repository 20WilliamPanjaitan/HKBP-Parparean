<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TingtingController extends Controller
{
    public function index()
    {
        return view(
            'tingting',
            [
                "title" => "berita"
            ]
        );
    }
}
