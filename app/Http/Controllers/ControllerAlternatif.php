<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alternatif;
use App\Models\siswa;
use App\Models\kriteria;
use App\Models\smart;
use App\Models\akar;
use App\Models\utility;
use App\Models\moora;
use DB;

class ControllerAlternatif extends Controller
{

    public function alternatif()
    {
        $kode = DB::table('tb_alternatif')->max('kode_alternatif');
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

        

        $data = alternatif::all();
        $siswa = siswa::all();
        $kriteria = kriteria::all();

       
        

         

        
        return view('alternatif.alternatif', compact('data','siswa','kriteria','kodeBaru'));
    }



    public function tambah_alternatif(Request $request)
    {
        //dd($request->all());

     $validatedata = $request->validate([
        'kode_alternatif' => 'required',
        'id_siswa' => 'required|unique:tb_alternatif',
        'nilai_raport' => 'required|unique:tb_alternatif',
        'extrakulikuler' => 'required',
        'jumlah_sertifikat' => 'required',
        'sikap_ls' => 'required',
        'sikap_ds' => 'required',
        'prestasi_akademik' => 'required',
        'prestasi_non_akademik' => 'required',
    ]);
      
     $insert1 = new alternatif;
     $insert1->kode_alternatif = $request->kode_alternatif;
     $insert1->id_siswa = $request->id_siswa;
     $insert1->absensi = $request->absensi;
     $insert1->nilai_raport = $request->nilai_raport;
     $insert1->extrakulikuler = $request->extrakulikuler;
     $insert1->jumlah_sertifikat = $request->jumlah_sertifikat;
     $insert1->sikap_ds = $request->sikap_ds;
     $insert1->sikap_ls = $request->sikap_ls;
     $insert1->prestasi_akademik = $request->prestasi_akademik;
     $insert1->prestasi_non_akademik = $request->prestasi_non_akademik;
        //alert()->success('Success','Data Berhasil Ditambahkan');
     $insert1->save();


     $insert2 = new akar;
     $insert2->kode_alternatif = $request->kode_alternatif;
     $insert2->id_siswa = $request->id_siswa;
     $insert2->absensi = pow($request->absensi,2);
     $insert2->nilai_raport = pow($request->nilai_raport,2);
     $insert2->extrakulikuler = pow($request->extrakulikuler,2);
     $insert2->jumlah_sertifikat = pow($request->jumlah_sertifikat,2);
     $insert2->sikap_ds = pow($request->sikap_ds,2);
     $insert2->sikap_ls = pow($request->sikap_ls,2);
     $insert2->prestasi_akademik = pow($request->prestasi_akademik,2);
     $insert2->prestasi_non_akademik = pow($request->prestasi_non_akademik,2);
     $insert2->save();

     $insert3 = new utility;
     $insert3->kode_alternatif = $request->kode_alternatif;

     $insert3->id_siswa = $request->id_siswa;
     $insert3->absensi = $request->absensi;
     $insert3->nilai_raport = $request->nilai_raport;
     $insert3->extrakulikuler = $request->extrakulikuler;
     $insert3->jumlah_sertifikat = $request->jumlah_sertifikat;
     $insert3->sikap_ds = $request->sikap_ds;
     $insert3->sikap_ls = $request->sikap_ls;
     $insert3->prestasi_akademik = $request->prestasi_akademik;
     $insert3->prestasi_non_akademik = $request->prestasi_non_akademik;
     $insert3->save();

     $insert4 = new moora;
     $insert4->id_siswa = $request->id_siswa;
     $insert4->kode_alternatif = $request->kode_alternatif;

     $insert4->save();


     $insert5 = new smart;
     $insert5->id_siswa = $request->id_siswa;
     $insert5->kode_alternatif = $request->kode_alternatif;

     alert()->success('Success','Data Berhasil Ditambahkan');
     $insert5->save();







     return back();
 }


 public function hapus_alternatif($kode_alternatif)
 {
    $hapus = alternatif::find($kode_alternatif);
    alert()->success('Success','Data Berhasil Dihapus');
    $hapus->delete();
    return back();
}

}
