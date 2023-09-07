<?php

namespace App\Controllers;

class Sijawara extends BaseController
{
    public function index()
    {
        return view('Dashboard');
    }

    public function Data_pegawai()
    {
        return view('Data_pegawai');
    }
}