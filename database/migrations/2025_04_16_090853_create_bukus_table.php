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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perpustakaan_id')->constrained('perpustakaan')->onDelete('cascade');
            $table->string('judulBuku');
            $table->string('pengarangBuku');
            $table->string('penerbitBuku');
            $table->string('tahunTerbitBuku');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
