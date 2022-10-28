<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alternatif extends Model
{
    use HasFactory;
    protected $primaryKey = "kode_alternatif";
    protected $table = "tb_alternatif";
    public $incrementing = false;
  protected $fillable = [
  'kode_alternatif', 'id_siswa'
];
    

    public function siswa()
    {
        return $this->belongsTo(siswa::class, 'id_siswa');
    }

    public function kriteria()
    {
        return $this->belongsTo(kriteria::class, 'kode_kriteria');
    }

    public function moora()
    {
        return $this->hasMany(moora::class, 'id_moora');
    }

    public function utility()
    {
        return $this->hasMany(utility::class, 'id_utility');
    }

     public function akar()
    {
        return $this->hasMany(akar::class, 'id_akar');
    }

     public function smart()
    {
        return $this->hasMany(smart::class, 'id_smart');
    }
}
