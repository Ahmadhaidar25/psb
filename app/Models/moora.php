<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moora extends Model
{
    use HasFactory;

    protected $table = 'tb_hasil_moora';
    protected $primaryKey = 'id_moora';


     public function alternatif()
    {
        return $this->belongsTo(alternatif::class, 'kode_alternatif');
    }

     public function siswa()
    {
        return $this->belongsTo(siswa::class, 'id_siswa');
    }

    public function akar()
    {
        return $this->belongsTo(akar::class, 'id_akar');
    }
}
