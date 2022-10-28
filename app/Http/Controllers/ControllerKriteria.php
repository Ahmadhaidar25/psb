<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria;
use App\Models\raport;

class ControllerKriteria extends Controller
{

    public function kriteria()
    {
        $data = kriteria::all();

        $kode = kriteria::count();
        if ($kode == 0) {
           
            $nomer = 'C'. $urut;
            
        }else{
            $ambil = kriteria::all()->last();
            $urut = (int)substr($ambil->kode_kriteria,-1) +1;
            $nomer = 'C'. $urut;
        }

        return view('kriteria.kriteria',compact('data','nomer'));
    }

    
    public function tambah_kriteria(Request $request)
    {
        //dd($request->all());

        $kriteria=new kriteria;
        $kriteria->kode_kriteria = $request->kode_kriteria;
        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->bobot = $request->bobot/100;
        $kriteria->jenis = $request->jenis;
        
        alert()->success('Success','Data Berhasil Di Simpan');
        $kriteria->save();
        return back();
    }

    
    public function hapus_kriteria($kode_kriteria)
    {
        $hapus = kriteria::find($kode_kriteria);
        alert()->success('Success','Data Berhasil Di Hapus');
        $hapus->delete();
        return  back();
    }

    public function update_kriteria(Request $request, $kode_kriteria)
    {
        $update = kriteria::find($kode_kriteria);
        $update->kode_kriteria = $request->kode_kriteria;
        $update->nama_kriteria = $request->nama_kriteria;
        $update->bobot = $request->bobot/100;
        $update->jenis = $request->jenis;

        
        alert()->success('Success','Data Berhasil Di Ubah');
        $update->update();
        return back();
    }


    
}
