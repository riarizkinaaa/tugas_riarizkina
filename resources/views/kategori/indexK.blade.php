@extends('layout.template')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">

            <table class="table table-muted">
                <a class="btn btn-primary my-2" href="kategory/create">Tambah Kategori</a>
                <thead>
                    @if (Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                        
                    @endif
        
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">kategori</th>
                        <th scope="col">keterangan</th>
                        <th scope="col">Aksi</th>
                      </tr>
                <tbody>
                    <tr>
                        @php
                            $no=1;
                         @endphp
                        @foreach ($kategori as $key=>$value)
                            <td>{{ $no++ }}</td>
                            <td>{{ $value->kategori }}</td>
                            <td>{{ $value->keterangan }}</td>
                            <td> <a class="btn btn-warning" href="{{ url('kategory/'.$value->id_kategori.'/editK') }}">Edit</a> </td>
                            <td>
                                <form action="{{ url('kategory/'.$value->id_kategori) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                                </form>
                            </td>
                            <td><a class="btn btn-info" href="{{ url('kategory/'.$value->id_kategori) }}">Detail</a></td>
                        </tr>
                        @endforeach
                    </thead>
                  
                </tbody>
              </table>  
        </div>
    </div>
</div>

@endsection