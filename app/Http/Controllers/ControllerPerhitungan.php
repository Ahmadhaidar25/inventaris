<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\normalisasi;
use App\Models\alternatif;
use App\Models\akar;
use App\Models\kriteria;
use App\Models\barang;
use App\Models\moora;
class ControllerPerhitungan extends Controller
{
    public function index()
    {
        $moora = alternatif::all();
        $hasil_moora = moora::all();
        $kriteria = kriteria::all();
        $pangkat = akar::all();
        $p1 = akar::all()->sum('gedung_a');
        $p2 = akar::all()->sum('gedung_b');
        $p3 = akar::all()->sum('gedung_c');
        $p4 = akar::all()->sum('kondisi_barang');

        $ak1 = akar::all()->sum('gedung_a');
        $ak2 = akar::all()->sum('gedung_b');
        $ak3 = akar::all()->sum('gedung_c');
        $ak4 = akar::all()->sum('kondisi_barang');

        $matrix = alternatif::all();
        $optimasi = alternatif::all();

        //$bobot = kriteria::all()->sum('bobot');


        return view('hasil.perhitungan', compact('moora','pangkat','p1','p2','p3','p4','kriteria','ak1','ak2','ak3','ak4','matrix','optimasi','hasil_moora'));
    }
}
