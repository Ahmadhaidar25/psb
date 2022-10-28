<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    use HasFactory;
    protected $primaryKey = 'kode_kriteria';
    protected $table="tb_kriteria";
    public $incrementing = false;


   public function alternatif()
    {
        return $this->hasMany(alternatif::class, 'kode_alternatif');
    }

     public function utility()
    {
        return $this->hasMany(utility::class, 'id_utility');
    }
}
