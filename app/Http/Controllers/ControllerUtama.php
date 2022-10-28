<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerUtama extends Controller
{
    public function utama()
    {
        return view('utama.utama');
    }
}
