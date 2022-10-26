@extends('layout.template')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ url('coba/'.$model->id_produk) }}" method="post">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="_method" value="PATCH">
                    <label for="nama" class="form-label my-2">Nama barang</label>
                    <input type="text" class="form-control" name="nama" value="{{ $model->nama }}">
                  </div>
                  <div class="mb-3">
                    <label for="deskripsi" class="form-label">deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="{{ $model->deskripsi }}">
                  </div>
                  <div class="mb-3">
                      <label for="harga" class="form-label">harga</label>
                      <input type="text" class="form-control" name="harga" value="{{ $model->harga }}">
                  </div>
                  <div class="mb-3">
                      <label for="stok" class="form-label" >stok</label>
                    <input type="text" class="form-control" name="stok" value="{{ $model->stok }}">
                  </div>
                <button class="btn btn-success" type="submit">SIMPAN</button>
            </form>
        </div>
        
    </div>
</div>
@endsection`


    {{-- <input type="hidden" name="_method" value="PATCH">
    nama: <input type="text" name="nama" value="{{ $model->nama }}">
    deskripsi: <input type="text" name="deskripsi" value="{{ $model->deskripsi }}">
    harga: <input type="text"name="harga" value="{{ $model->harga }}">
    stok: <input type="text" name="stok" value="{{ $model->stok }}"> --}}