<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'tb_produk'; // pastikan sesuai nama tabel kamu

    protected $primaryKey = 'id_produk'; // jika bukan 'id' default

    protected $fillable = [
        'nama_produk',
        'harga',
        'deskripsi_produk',
        'kategori_id',
    ];
}

