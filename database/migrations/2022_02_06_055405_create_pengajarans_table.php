<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajaran', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dosen_id');
            $table->bigInteger('kegiatan_id');
            $table->bigInteger('masaPenugasan_id');
            $table->bigInteger('rekomendasi_id');
            $table->string('buktiPenugasan');
            $table->string('sksBK'); 
            $table->string('buktiDokumen');
            $table->string('sksBD');
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
        Schema::dropIfExists('pengajaran');
    }
}
