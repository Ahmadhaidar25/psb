<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_siswa';
    protected $table = "tb_siswa";
    protected $fillable = ['id_siswa','nama_siswa','kelas','jenis_kelamin','nilai_rapot'];

    public function alternatif()
    {
        return $this->hasOne(alternatif::class, 'kode_alternatif');
    }

     public function akar()
    {
        return $this->hasMany(akar::class, 'id_akar');
    }

    public function utility()
    {
        return $this->hasMany(utility::class, 'id_utility');
    }

    public function moora()
    {
        return $this->hasMany(moora::class, 'id_moora');
    }

     public function smart()
    {
        return $this->hasMany(smart::class, 'id_smart');
    }
}
