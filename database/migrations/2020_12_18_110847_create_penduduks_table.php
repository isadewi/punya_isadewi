<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
           $table->id();
           $table->foreignId('kartu_keluarga_id');
           $table->string('nama');
           $table->string('nik');
           $table->string('tempat_lahir');
           $table->date('tanggal_lahir');
           $table->string('agama');
           $table->string('jenis_kelamin');
           $table->foreignId('level_pendidikan_id');
           $table->foreignId('pekerjaan_id');
           $table->string('status_pernikahan');
           $table->string('status_keluarga');
           $table->foreignId('kewarganegaraan_id');
           $table->string('ayah');
           $table->string('ibu');
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
        Schema::dropIfExists('penduduk');
    }
}
