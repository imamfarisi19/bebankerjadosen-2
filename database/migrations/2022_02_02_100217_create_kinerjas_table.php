<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKinerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kinerja', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idMasaPenugasan')->index();
            $table->string('buktiDokumen');
            $table->bigInteger('sks');
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
        Schema::dropIfExists('kinerja');
    }
}
