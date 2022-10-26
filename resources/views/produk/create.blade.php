@extends('layout.template')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ url('coba') }}" method="post" class="my-5">
                @csrf

                <div class="form-group">
                  <label for="id_kategori">Nama kategori</label>
                  <select name="id_kategori" id="id_kategori" class="form-control select2" style="width: 100%;">
                      <option selected>--pilih kategori produk--</option>
                      @foreach($kategori as $val)
                      <option value="<?= $val->id_kategori ?>"><?= $val->kategori ?></option>
                      @endforeach
                  </select>
              </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama barang</label>
                    <input type="text" class="form-control @error('nama')
                      is-invalid
                    @enderror" name="nama" value="{{ old('nama') }}">

                    @error('nama')
                    <div  class="invalid-feedback">
                      {{ $message }}
                    </div>
                        
                    @enderror
                    
                  </div>
                  <div class="mb-3">
                    <label for="deskripsi" class="form-label">deskripsi</label>
                    <textarea class="form-control @error('deskripsi')
                        is-invalid
                    @enderror" id="exampleFormControlTextarea1" name="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>

                    @error('deskripsi')
                    <div  class="invalid-feedback">
                      {{ $message }}
                    </div>
                        
                    @enderror
                  </div>
                  <div class="mb-3">
                      <label for="harga" class="form-label">harga</label>
                      <input type="text" class="form-control @error('harga')
                          is-invalid
                      @enderror" name="harga" value="{{ old('harga') }}">


                      @error('harga')
                      <div  class="invalid-feedback">
                        {{ $message }}
                      </div>
                          
                      @enderror

                  </div>
                  <div class="mb-3">
                      <label for="stok" class="form-label" >stok</label>
                    <input type="text" class="form-control @error('stok')
                        is-invalid
                    @enderror" name="stok" value="{{ old('stok') }}">

                    @error('stok')
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