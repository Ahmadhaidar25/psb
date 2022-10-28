<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Normalisasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tb_normalisasi', function (Blueprint $table) {
        $table->increments('id_normalisasi');
        $table->integer('kode_alternatif');
        $table->integer('kode_kriteria');
        $table->integer('kode_bobot');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_normalisasi');
    }
}
