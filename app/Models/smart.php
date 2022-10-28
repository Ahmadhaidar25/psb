<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class smart extends Model
{
    use HasFactory;


    protected $table = 'tb_hasil_smart';
    protected $primaryKey = 'id_smart';

     public function alternatif()
    {
        return $this->belongsTo(alternatif::class, 'kode_alternatif');
    }

    public function siswa()
    {
        return $this->belongsTo(siswa::class, 'id_siswa');
    }
}
