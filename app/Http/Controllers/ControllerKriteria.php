<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria;
use Ramsey\Uuid\Uuid;

class ControllerKriteria extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriteria =  kriteria::all();
        $data = kriteria::count();
        if ($data == 0) {
            $urut = 001;
            $nomer = 'C00'. $urut;
            
        }else{
            $ambil = kriteria::all()->last();
            $urut = (int)substr($ambil->kode_kriteria,-1) +1;
            $nomer = 'C00'. $urut;
        }




        return view('master_moora.kriteria',compact('data','kriteria','nomer'));
    }

  
    
    public function store(Request $request)
    {
        $this->validate($request, [

            'kode_kriteria' => 'required',
            'nama_kriteria' => 'required',
            'bobot' => 'required',
            'jenis' => 'required',
        ]);
        $insert = new kriteria;
        $insert->kode_kriteria = $request->kode_kriteria;
        $insert->nama_kriteria = $request->nama_kriteria;
        $insert->bobot = $request->bobot/100;
        $insert->jenis = $request->jenis;
        alert()->success('Data Berhasil Di Tambahkan');
        $insert->save();
        return back();
    }

   
   
    public function update(Request $request, $id_kriteria)
    {
        $this->validate($request, [

            'kode_kriteria' => 'required',
            'nama_kriteria' => 'required',
            'bobot' => 'required',
            'jenis' => 'required',
        ]);
        $update = kriteria::find($id_kriteria);
        $update->kode_kriteria = $request->kode_kriteria;
        $update->nama_kriteria = $request->nama_kriteria;
        $update->bobot = $request->bobot;
        $update->jenis = $request->jenis;
        alert()->success('Data Berhasil Di Ubah');
        $update->update();
        return redirect('kriteria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_kriteria)
    {
     $hapus = kriteria::find($id_kriteria);
     alert()->success('Data Berhasil Di Hapus');
     $hapus->delete();
     return back();
 }
}
