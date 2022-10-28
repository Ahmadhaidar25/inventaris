<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\moora;
use App\Models\alternatif;
use App\Models\akar;

class ControllerHasil extends Controller
{
    public function hasil_akhir()
    {

       $moora = moora::orderBy('kode_alternatif', 'DESC')->get();
       $alternatif = alternatif::all();
       //$alternatif = alternatif();
       $ak1 = akar::all()->sum('gedung_a');
       $ak2 = akar::all()->sum('gedung_b');
       $ak3 = akar::all()->sum('gedung_c');
       $ak4 = akar::all()->sum('kondisi_barang');
       return view('hasil.perhitungan', compact('moora','ak1','ak2','ak3','ak4','alternatif'));
   }
}
