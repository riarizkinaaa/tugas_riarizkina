<?php

namespace App\Http\Controllers;

use App\Models\Kategorimodel;
use App\Models\Produkmodel;
use Illuminate\Http\Request;

class Kategoricontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori=Kategorimodel::all();
        return view ('kategori.indexK',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $model=new Kategorimodel();
        return view ('kategori.createK',compact('model'));

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
            'kategori'=>'required',
            'keterangan'=>'required',
        ],
    [
        'kategori.required'=>'kategori produk tidak boleh kosong',
        'keterangan.required'=>'keterangan tidak boleh kosong',
    ]);
    $model=new Kategorimodel();
    $model->kategori=$request->kategori;
    $model->keterangan=$request->keterangan;
    $model->save();
    return redirect('kategory')->with('success','data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_kategori)
    {
        $model=Kategorimodel::findOrFail($id_kategori);
        return view('kategori.show',compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kategori)
    {
        $model=Kategorimodel::findOrFail($id_kategori);
        return view('kategori.editK',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kategori)
    {
        $model=Produkmodel::find($id_kategori);
        $model->kategori=$request->kategori;
        $model->keterangan=$request->keterangan;
        $model->save();
        return redirect('kategory')->with('success','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kategori)
    {
        $model=Kategorimodel::find($id_kategori);
        $model->delete();
        return redirect('kategory')->with('success','data berhasil di hapus');
    }
}
