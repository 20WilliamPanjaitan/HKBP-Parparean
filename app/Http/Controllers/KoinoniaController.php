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

    public function dewan_koinonia()
    {
        return view(
            'dewan_koinonia',
            [
                "title" => "koinonia"
            ]
        );
    }

    public function sekolah_minggu()
    {
        return view(
            'sekolah_minggu',
            [
                "title" => "koinonia"
            ]
        );
    }

    public function remaja()
    {
        return view(
            'remaja',
            [
                "title" => "koinonia"
            ]
        );
    }

    public function naposo()
    {
        return view(
            'naposo',
            [
                "title" => "koinonia"
            ]
        );
    }

    public function parompuan()
    {
        return view(
            'parompuan',
            [
                "title" => "koinonia"
            ]
        );
    }

    public function ama()
    {
        return view(
            'ama',
            [
                "title" => "koinonia"
            ]
        );
    }

    public function lansia()
    {
        return view(
            'lansia',
            [
                "title" => "koinonia"
            ]
        );
    }

    
}
