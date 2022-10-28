<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akar extends Model
{
    protected $table = "tb_akar";
    protected $primaryKey = "id_akar";
    use HasFactory;

     public function siswa()
    {
        return $this->belongsTo(siswa::class, 'id_siswa');
    }

    public function moora()
    {
        return $this->hasMany(moora::class, 'id_moora');
    }

     public function alternatif()
    {
        return $this->belongsTo(alternatif::class, 'kode_alternatif');
    }
}
