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

    public function dewan_marturia()
    {
        return view(
            'dewan_marturia',
            [
                "title" => "marturia"
            ]
        );
    }

    public function sending()
    {
        return view(
            'sending',
            [
                "title" => "marturia"
            ]
        );
    }

    public function tim_doa()
    {
        return view(
            'tim_doa',
            [
                "title" => "marturia"
            ]
        );
    }

    public function musik()
    {
        return view(
            'musik',
            [
                "title" => "marturia"
            ]
        );
    }

    public function multi_media()
    {
        return view(
            'multi_media',
            [
                "title" => "marturia"
            ]
        );
    }
}
