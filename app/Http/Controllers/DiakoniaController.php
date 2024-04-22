<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiakoniaController extends Controller
{
    public function index()
    {
        return view(
            'diakonia',
            [
                "title" => "diakonia"
            ]
        );
    }


    public function dewan_diakonia()
    {
        return view(
            'dewan_diakonia',
            [
                "title" => "diakonia"
            ]
        );
    }

    public function sosial()
    {
        return view(
            'sosial',
            [
                "title" => "diakonia"
            ]
        );
    }

    public function pendidikan()
    {
        return view(
            'pendidikan',
            [
                "title" => "diakonia"
            ]
        );
    }

    public function kesehatan()
    {
        return view(
            'kesehatan',
            [
                "title" => "diakonia"
            ]
        );
    }

    public function kemasyarakatan()
    {
        return view(
            'kemasyarakatan',
            [
                "title" => "diakonia"
            ]
        );
    }
}
