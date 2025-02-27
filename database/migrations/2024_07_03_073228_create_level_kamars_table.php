<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelLevelKamar extends Migration
{

    public function up(): void
    {
        Schema::create('level_kamar', function (Blueprint $table) {
            $table->id();
            $table->string('nama_level');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('level_kamar');
    }
};

