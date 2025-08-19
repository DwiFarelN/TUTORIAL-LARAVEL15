<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\produk;

class ProdukController extends Controller
{
    public function index()
    {
        $toko = [
            'nama_toko'=> 'Toko Rels',
            'alamat' => 'Jl sukamaju no 123',
            'type' => 'Ruko'
        ];  

        $produk = produk::get(); // Mengambil semua data produk dari model produk

        // $queryBuilder = DB::table('tb_produk')->get(); // Jika ingin pakai query builder

        return view('pages.produk.show', [
            'data_toko' => $toko,
            'data_produk' => $produk,
        ]);
    }

    public function create(){
        return view('pages.produk.add');
    }
    public function store(){

    }
}
