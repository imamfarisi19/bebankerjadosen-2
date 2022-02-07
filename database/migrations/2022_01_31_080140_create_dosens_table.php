<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaDepan', 20);
            $table->string('namaBelakang', 20);
            $table->string('email', 30);
            $table->string('jabatan', 20)->nullable();
            $table->date('tanggalLahir');
            $table->string('NIDN', 15);
            $table->string('NIP', 20);
            $table->string('gelarDepan')->nullable();
            $table->string('gelarBelakang', 20);
            $table->bigInteger('jabatanFungsional_id')->nullable();
            $table->string('golongan', 11);
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
        Schema::dropIfExists('dosen');
    }
}
