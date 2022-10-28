<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utility extends Model
{
 protected $table = "tb_utility";
 protected $primaryKey = "id_utility";
 use HasFactory;

 public function siswa()
 {
    return $this->belongsTo(siswa::class, 'id_siswa');
}
public function alternatif()
{
    return $this->belongsTo(alternatif::class, 'kode_alternatif');
}

public function kriteria()
{
    return $this->belongsTo(kriteria::class, 'kode_kriteria');
}

}
