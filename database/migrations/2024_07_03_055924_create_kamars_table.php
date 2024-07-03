<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelKamar extends Migration
{
    public function up()
    {
        Schema::create('kamar', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kamar');
            $table->foreignId('tipe_kamar_id')->constrained('tipe_kamar')->onDelete('cascade');
            $table->enum('status', ['tersedia', 'terisi', 'perawatan'])->default('tersedia');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kamar');
    }
}
