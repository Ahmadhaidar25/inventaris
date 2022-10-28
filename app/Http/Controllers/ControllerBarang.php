<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\komentar;
use App\Models\kriteria;
use Ramsey\Uuid\Uuid;
use DB;

class ControllerBarang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
      $kode = DB::table('barang')->max('kode_barang');
      $addNol = '';
      $kode = str_replace("BR", "", $kode);
      $kode = (int) $kode + 1;
      $incrementKode = $kode;

      if (strlen($kode) == 1) {
        $addNol = "0";
    } elseif (strlen($kode) == 1) {
        $addNol = "0";
    } elseif (strlen($kode == 1)) {
        $addNol = "0";
    }

    $kodeBaru = "BR".$addNol.$incrementKode;


    $barang = barang::all();
    $kriteria = kriteria::all();
    $jumlah = barang::all()->sum('total');



    return view('master_barang.barang', compact('barang','jumlah','kriteria','kodeBaru'));
}


public function store(Request $request)
{
 $validate=$request->validate([
    'kode_barang' => 'required',
    'nama_barang' => 'required|unique:barang',
    'tanggal' => 'required',
    'lokasi' => 'required',
    'harga' => 'required',
    'qty' => 'required',
    'total' => 'required',
]);
 
 
 $insert = new barang;
 $insert->kode_barang = $request->kode_barang;
 $insert->nama_barang = $request->nama_barang;
 $insert->tanggal = $request->tanggal;
 $insert->lokasi = $request->lokasi;
 $insert->harga = $request->harga;
 $insert->qty = $request->qty;
 $insert->total = $request->total;
 alert()->success('Data Berhasil Di Tambahkan');
 $insert->save();
 return back();
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($kode_barang)
    {
        $delete = barang::find($kode_barang);
        alert()->success('Data Berhasil Di Hapus');
        $delete->delete();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_barang)
    {
     $edit = barang::find($kode_barang);
     $kriteria = kriteria::all();
     return view('master_barang.edit_barang', compact('edit','kriteria'));
 }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_barang)
    {
        $request->validate([
          'kode_barang' => 'required',
          'nama_barang' => 'required',
          'tanggal' => 'required',
          'lokasi' => 'required',
          'harga' => 'required',
          'qty' => 'required',
          'total' => 'required',
      ]);

        $update = barang::find($kode_barang);
        $update->kode_barang = $request->kode_barang;
        $update->nama_barang = $request->nama_barang;
        $update->tanggal = $request->tanggal;
        $update->lokasi = $request->lokasi;
        $update->harga = $request->harga;
        $update->qty = $request->qty;
        $update->total = $request->total;
        alert()->success('Data Berhasil Di Ubah');
        $update->save();
        return redirect('barang');
    }


}
