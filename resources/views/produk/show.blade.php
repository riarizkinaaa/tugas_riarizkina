@extends('layout.template')
@section('conten')
    <h1 style="text-align: center">Detail Produk</h1>
    <p>Nama Produk: {{ $model->nama }}</p>
    <p>Deskripsi: {{ $model->deskripsi }}</p>
    <p>Harga Barang: {{ $model->harga }}</p>
    <p>Stok Barang: {{ $model->stok}}</p>
    
@endsection