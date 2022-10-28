<?php

namespace App\Helpers;

use App\Models\alternatif;
use Illuminate\Support\Facades\DB;


class Helper
{
    public static function criteriaMenu()
    {
        $alternatif = alternatif::all();
        return $alternatif;
    }

     public static function getAlternative()
    {
        // $getAlternative = Alternative::all();
        $getAlternative = DB::table('tb_alternatif')->get();
        $arrayAlternative = json_decode(json_encode($getAlternative), true);
        $alternative = array();

        foreach ($arrayAlternative as $row) {
            $alternative[$row['kode_alternatif']] = array(
                $row['id_siswa'],
                $row['absensi'],
                $row['nilai_raport'],
                $row['extrakulikuler'],
                $row['jumlah_sertifikat'],
                $row['sikap_ds'],
                $row['sikap_ls'],
                $row['prestasi_akademik'],
                $row['prestasi_non_akademik'],
            );
        }

        // dd($alternative);

        return $alternative;
    }


     public static function valMatrix()
    {
        $result = alternatif::all();
        $valMatrix = array();

        // dd($valMatrix);

        return $valMatrix;
    }
}