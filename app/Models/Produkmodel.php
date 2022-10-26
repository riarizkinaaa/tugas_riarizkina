<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produkmodel extends Model
{
    use HasFactory;
    protected $table='produkmodels';
    protected $primaryKey='id_produk';
    protected $fillable=['id_produk','nama','deskripsi','harga','stok'];
    protected $timestemps=true;

    // public function kategori(){
    //     return $this->belongsTo(Kategorimodel::class);
    // }
}
