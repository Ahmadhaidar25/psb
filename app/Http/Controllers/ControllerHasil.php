<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\moora;
use App\Models\smart;
use App\Models\akar;
use App\Models\utility;
use App\Models\alternatif;
use App\Models\siswa;



class ControllerHasil extends Controller
{
  public function hasil_akhir()
  {
    $siswa = siswa::all()->count();
    $utility = utility::all();
    //$smart_kesesuan = utility::all()->sum();
    $sum1 = akar::all()->sum('absensi');
    $sum2 = akar::all()->sum('nilai_raport');
    $sum3 = akar::all()->sum('extrakulikuler');
    $sum4 = akar::all()->sum('jumlah_sertifikat');
    $sum5 = akar::all()->sum('sikap_ds');
    $sum6 = akar::all()->sum('sikap_ls');
    $sum7 = akar::all()->sum('prestasi_akademik');
    $sum8 = akar::all()->sum('prestasi_non_akademik');


    $min1 = utility::all()->min('absensi');
    $min2 = utility::all()->min('nilai_raport');
    $min3 = utility::all()->min('extrakulikuler');
    $min4 = utility::all()->min('jumlah_sertifikat');
    $min5 = utility::all()->min('sikap_ds');
    $min6 = utility::all()->min('sikap_ls');
    $min7 = utility::all()->min('prestasi_akademik');
    $min8 = utility::all()->min('prestasi_non_akademik');


    $max1 = utility::all()->max('absensi');
    $max2 = utility::all()->max('nilai_raport');
    $max3 = utility::all()->max('extrakulikuler');
    $max4 = utility::all()->max('jumlah_sertifikat');
    $max5 = utility::all()->max('sikap_ds');
    $max6 = utility::all()->max('sikap_ls');
    $max7 = utility::all()->max('prestasi_akademik');
    $max8 = utility::all()->max('prestasi_non_akademik');

    $hasil_moora = moora::all();
    $hasil_smart = smart::all();
    $alternatif = alternatif::all()->count();
    return view('hasil-keputusan.hasil_keputusan', compact('utility','sum1','sum2','sum3','sum4','sum5','sum6','sum7',
       'sum8','min1','min2','min3','min4','min5','min6','min7','min8','max1','max2','max3','max4','max5','max6','max7','max8','hasil_moora','hasil_smart','alternatif','siswa'));
 }
}
