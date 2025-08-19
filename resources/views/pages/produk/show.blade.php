@extends('layouts.master')

@section('content')
    <h1>Product</h1>
    <p>Data Produk kami.</p>
    
    <!-- Perbaiki tag <a> yang tidak ditutup dengan benar -->
    <a href="/product/create" class="btn btn-primary mb-3">Tambah Data</a>

    <div class="alert alert-primary">
        <b>Nama Toko : </b> {{$data_toko['nama_toko']}} <br>
        <b>Alamat : </b> {{$data_toko['alamat']}} <br>
        <b>Type Toko : </b> {{$data_toko['type']}}
    </div>
    @if (session('message'))
        <div class="alert alert-primary">
            {{ session('message') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            Daftar Produk
        </div>

        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_produk as $item)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item->nama_produk}}</td>
                            <td>{{ number_format($item->harga, 0, ',', '.') }}</td> <!-- Format harga supaya lebih enak -->
                            <td>{{$item->deskripsi_produk}}</td>
                            <td>
                                <button type="button" class="btn btn-danger">Hapus</button>
                                <button type="button" class="btn btn-warning">Edit</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
