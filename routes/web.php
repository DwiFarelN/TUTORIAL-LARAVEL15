<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    $Biodata = [
        'Nama' => 'Farel Dwi',
        'Umur' => 15.0,
        'Kelas' => 'XII RPL',
        'Sekolah' => 'SMK Antarika 1 Sidoarjo',
        'Alamat' => 'Jl. Rajawali.Gedangan, Sidoarjo',
    ];
    return view('pages.about')->with('Biodata', $Biodata);
});

Route::get('/about/{id}', function ($id){
    return view('pages.detail',[
        "nomer" =>$id
  ]);
});

Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/product', function () {
    return view('pages.detail');
});