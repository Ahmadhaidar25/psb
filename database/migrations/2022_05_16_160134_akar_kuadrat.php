<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AkarKuadrat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_akar', function (Blueprint $table) {
        $table->increments('kode_akar');
        $table->integer('akar_satu');
        $table->integer('akar_dua');
        $table->integer('akar_tiga');
        $table->integer('akar_empat');
        $table->integer('akar_lima');
        $table->integer('akar_enam');
        $table->integer('akar_tujuh');
        $table->integer('akar_delapan');
        $table->integer('akar_sembilan');
        $table->integer('akar_sepuluh');
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
        Schema::dropIfExists('tb_akar');
    }
}
