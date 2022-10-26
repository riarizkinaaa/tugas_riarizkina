@extends('layout.template')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">

            <form action="{{ url('kategory') }}" method="post">
                @csrf
            <div class="mb-3 my-5">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control @error('kategori')
                  is-invalid
                @enderror" name="kategori" value="{{ old('kategori') }}">
            
                @error('kategori')
                <div  class="invalid-feedback">
                  {{ $message }}
                </div>
                    
                @enderror
                
              </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">keterangan</label>
                <input type="text" class="form-control @error('keterangan')
                  is-invalid
                @enderror" name="keterangan" value="{{ old('keterangan') }}">
            
                @error('keterangan')
                <div  class="invalid-feedback">
                  {{ $message }}
                </div>
                    
                @enderror
                
              </div>
              <button class="btn btn-success" type="submit">SIMPAN</button>
            </form>
        </div>
    </div>
</div>
@endsection




{{-- <form action="{{ url('kategory') }}" method="post">
    @csrf
    kategori: <input type="text" name="kategori">
    keterangan: <input type="text" name="keterangan">

    <button type="submit">SIMPAN</button>
</form> --}}