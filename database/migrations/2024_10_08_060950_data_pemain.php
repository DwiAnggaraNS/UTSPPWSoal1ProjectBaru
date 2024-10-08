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
        Schema::create('data_pemain', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemain');
            $table->integer('no_punggung');
            $table->string('posisi');
            $table->timestamps();
        });
    }
// ( id, nama_pemain, no_punggung, posisi)
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pemain');
    }
};
