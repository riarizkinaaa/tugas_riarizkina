<?php

namespace App\Http\Controllers;

use App\Models\Kategorimodel;
use App\Models\Produkmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Produkcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $kategori = DB::table('kategorimodels')->get();
        $produk = DB::table('produkmodels')->join('kategorimodels', 'kategorimodels.id_kategori',  '=', 'produkmodels.id_kategori')->get();
        // dd($kategori);
        return view('produk.index', [
            'kategori' => $kategori,
            'produk_join' => $produk,
        ]);



        // $datas=Produkmodel::all();

        // return view('produk.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model=new Produkmodel();
        return view('produk.create',compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated=$request->validate([
            'nama'=>'required',
            'deskripsi'=>'required',
            'harga'=>'required|numeric',
            'stok'=>'required|numeric'
        ],
    [
        'nama.required'=>'nama produk tidak boleh kosong',
        'deskripsi.required'=>'deskripsi tidak boleh kosong',
        'harga.required'=>'harga barang tidak boleh kosong',
        'harga.numeric'=>'anda harus memasukkan angka',
        'stok.required'=>'stok barang tidak boleh kosong',
        'stok.numeric'=>'anda harus memasukkan angka'

    ]);

        $model=new Produkmodel();
        $model->id_kategori=$request->id_kategori;
        $model->nama=$request->nama;
        $model->deskripsi=$request->deskripsi;
        $model->harga=$request->harga;
        $model->stok=$request->stok;
        $model->save();
        return redirect('coba')->with('success','data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_produk)
    {
       $model=Produkmodel::findOrFail($id_produk);
       return view('produk.show',compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_produk)
    {
        $model=Produkmodel::findOrFail($id_produk);
        return view('produk.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_produk)
    {
        $model=Produkmodel::find($id_produk);
        $model->nama=$request->nama;
        $model->deskripsi=$request->deskripsi;
        $model->harga=$request->harga;
        $model->stok=$request->stok;
        $model->save();
        return redirect('coba')->with('success','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_produk)
    {
        $model=Produkmodel::find($id_produk);
        $model->delete();
        return redirect('coba')->with('success','data berhasil di hapus');
    }
}
