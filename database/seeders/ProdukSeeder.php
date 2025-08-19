<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ← Tambahkan ini

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        // Menambahkan data awal ke tabel produk
        DB::table('tb_produk')->insert([
    [
        'nama_produk' => 'Iphone 16 Pro Max',
        'harga' => 23000000,
        'deskripsi_produk' => 'Smartphone flagship terbaru dengan fitur canggih dan performa tinggi.',
        'kategori_id' => 1,
        'created_at' => now(),
    ],
    [
        'nama_produk' => 'Samsung Galaxy S24 Ultra',
        'harga' => 21000000,
        'deskripsi_produk' => 'Smartphone premium dengan kamera terbaik dan layar besar.',
        'kategori_id' => 2,
        'created_at' => now(),
    ],
    [
        'nama_produk' => 'Xiaomi Redmi Note 12',
        'harga' => 3000000,
        'deskripsi_produk' => 'Smartphone terjangkau dengan spesifikasi yang baik.',
        'kategori_id' => 3,
        'created_at' => now(),
    ],
    [
        'nama_produk' => 'Oppo A78',
        'harga' => 4000000,
        'deskripsi_produk' => 'Smartphone dengan desain stylish dan performa yang baik.',
        'kategori_id' => 4,
        'created_at' => now(),
    ]
    ]);
    }
}
