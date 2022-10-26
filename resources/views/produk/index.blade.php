@extends('layout.template')
@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <table class="table">
          <thead>
            @if (Session::has('success'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
                
            @endif

              <a class="btn btn-info my-3" href="{{ url('coba/create') }}">Tambah Data</a>
            <tr>
             
              <th scope="col">No</th>
              <th scope="col">nama kategori</th>
              <th scope="col">nama produk</th>
              {{-- <th scope="col">kategori</th> --}}
              <th scope="col">deskripsi</th>
              <th scope="col">harga</th>
              <th scope="col">stok</th>
              <th scope="col" >Aksi</th>
            </tr>
            @php
                $no=1;
            @endphp
            @foreach ($kategori as $key=>$value)
              <tr>
                  
                  <td>{{ $no++ }}</td>
                  <td>{{ $value->kategori }}</td>
                  <td>{{ $value->nama }}</td>
                  <td>{{ $value->deskripsi }}</td>
                  <td>{{ $value->harga }}</td>
                  <td>{{ $value->stok }}</td>
                  <td> <a class="btn btn-warning" href="{{ url('coba/'.$value->id_produk.'/edit') }}">Edit</a> </td>
                  <td>
                      <form action="{{ url('coba/'.$value->id_produk) }}" method="post">
                          @csrf
                          <input type="hidden" name="_method" value="delete">
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                      </form>
                  </td>
                  <td><a  class="btn btn-info" href="{{ url('coba/'.$value->id_produk) }}">Detail</a></td>
              </tr>
                
            @endforeach
          </thead>
      
      </table>      

    </div>
  </div>
</div>
@endsection