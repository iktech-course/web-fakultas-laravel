<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mk_pengampu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_dosen');
            $table->unsignedBigInteger('id_mk');
            $table->foreign('id_dosen')->references('id')->on('dosen');
            $table->foreign('id_mk')->references('id')->on('mata_kuliah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mk_pengampu');
    }
};
