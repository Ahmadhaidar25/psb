<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alternatif extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('tb_alternatif', function (Blueprint $table) {
        $table->id();
        $table->string('kode');
        
        $table->string('nama_siswa');
        $table->string('absensi');
        $table->string('nilai_rapot');
        $table->string('extrakulikuler');
        $table->string('jumlah_sertifikat');
        $table->string('sikap_ds');
        $table->string('sikap_ls');
        $table->string('prestasi_akademik');
        $table->string('prestasi_non_akademik');
        $table->rememberToken();
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
        Schema::dropIfExists('tb_alternatif');
    }
}
