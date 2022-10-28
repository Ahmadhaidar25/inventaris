<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alternatif;
use App\Models\barang;
use App\Models\kriteria;
use App\Models\normalisasi;
use App\Models\akar;
use App\Models\moora;
use DB;

class ControllerAlternatif extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kode = DB::table('alternatif')->max('kode_alternatif');
        $addNol = '';
        $kode = str_replace("AL", "", $kode);
        $kode = (int) $kode + 1;
        $incrementKode = $kode;

       if (strlen($kode) == 1) {
            $addNol = "0";
        } elseif (strlen($kode) == 1) {
            $addNol = "0";
        } elseif (strlen($kode == 1)) {
            $addNol = "0";
        }

        $kodeBaru = "AL".$addNol.$incrementKode;

        $alternatif = alternatif::all();
        $barang = barang::all();
        $kriteria = kriteria::all();
        

       
        return view('alternatif.alternatif',compact('alternatif','kodeBaru','barang'));
    }

 
    
    public function store(Request $request)
    {
        $this->validate($request, [

            'kode_alternatif' => 'required',
            'kode_barang' => 'required',
            'gedung_a' => 'required',
            'gedung_b' => 'required',
            'gedung_c' => 'required',
            'kondisi_barang' => 'required',
        ]);
        $insert1 = new alternatif;
        $insert1->kode_alternatif = $request->kode_alternatif;
        $insert1->kode_barang = $request->kode_barang;
        $insert1->gedung_a = $request->gedung_a;
        $insert1->gedung_b = $request->gedung_b;
        $insert1->gedung_c = $request->gedung_c;
        $insert1->kondisi_barang = $request->kondisi_barang;
        $insert1->save();

        $insert2 = new akar;
        $insert2->kode_alternatif = $request->kode_alternatif;
        $insert2->kode_barang = $request->kode_barang;
        $insert2->gedung_a = pow($request->gedung_a,2);
        $insert2->gedung_b = pow($request->gedung_b,2);
        $insert2->gedung_c = pow($request->gedung_c,2);
        $insert2->kondisi_barang = pow($request->kondisi_barang,2);
        $insert2->save();

        $insert3 = new moora;
        $insert3->kode_alternatif = $request->kode_alternatif;
        $insert3->kode_barang = $request->kode_barang;
        alert()->success('Data Berhasil Di Tambahkan');
        $insert3->save();
        return back();
    }

   
    
    public function delete($id_alternatif)
    {
        $delete = alternatif::find($id_alternatif);
        alert()->success('Data Berhasil Di Hapus');
        $delete->delete();
        return back();
    }
}
