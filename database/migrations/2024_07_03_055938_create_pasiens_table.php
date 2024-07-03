<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelPasien extends Migration
{
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['pria', 'wanita']);
            $table->string('nomor_kontak');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}
