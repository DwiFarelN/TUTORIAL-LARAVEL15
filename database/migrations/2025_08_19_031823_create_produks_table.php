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
        // Membuat tabel 'produks' dengan kolom yang sesuai
        Schema::create('tb_produk', function (Blueprint $table) {
            $table->id('id_produk');//defaultnya 'id'
            $table->string('nama_produk',150); // Kolom untuk nama produk
            $table->integer('harga'); // Kolom untuk harga produk
            $table->text('deskripsi_produk'); // Kolom untuk deskripsi produk
            $table->integer('kategori_id'); // Kolom untuk stok produk
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
