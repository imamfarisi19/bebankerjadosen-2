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
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('namaDepan', 20);
            $table->string('namaBelakang', 20);
            $table->string('email', 30);
            $table->string('jabatan', 20)->nullable();
            $table->date('tanggalLahir');
            $table->string('NIDN', 15);
            $table->string('NIP', 15);
            $table->string('gelarDepan')->nullable();
            $table->string('gelarBelakang', 20);
            $table->string('jabatanFungsional')->nullable();
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
        Schema::dropIfExists('dosens');
    }
}
