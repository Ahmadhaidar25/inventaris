<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\barang;
use App\Models\kriteria;
use App\Models\alternatif;
use App\Models\moora;
use DB;
class DashboardController extends Controller
{
    public function index()
    {
        $dashboard = User::all()->count();
        $kriteria = kriteria::all()->count();
        $alternatif = alternatif::all()->count();
        $moora = moora::all()->count();
        $jumlah = barang::all()->sum('total');
        return view('dashboard', compact('dashboard','jumlah','kriteria','alternatif','moora'));
    }
}
