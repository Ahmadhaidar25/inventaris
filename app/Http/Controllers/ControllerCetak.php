<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\moora;
use App\Models\akar;

class ControllerCetak extends Controller
{
    public function cetak()
    {

       $moora = moora::all();
       $ak1 = akar::all()->sum('gedung_a');
       $ak2 = akar::all()->sum('gedung_b');
       $ak3 = akar::all()->sum('gedung_c');
       $ak4 = akar::all()->sum('kondisi_barang');
        return view('cetak.pdf',compact('moora','ak1','ak2','ak3','ak4'));
   }
}
