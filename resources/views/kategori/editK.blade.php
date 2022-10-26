@extends('layout.template')
@section('content')
    <form action="{{ url('kategory/'.$model->id_kategori) }}" method="post">
        @csrf
        <div class="mb-3">
            <input type="hidden" name="_method" value="PATCH">
            <label for="kategori" class="form-label my-2">kategori</label>
            <input type="text" class="form-control" name="kategori" value="{{ $model->kategori }}">
          </div>
          <div class="mb-3">
            <label for="keterangan" class="form-label">keterangan</label>
            <input type="text" class="form-control" name="keterangan" value="{{ $model->keterangan }}">
          </div>
        <button type="submit">SIMPAN</button>
    </form>
@endsection`