<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorimodel extends Model
{
    use HasFactory;
    protected $table='kategorimodels';
    protected $primaryKey='id_kategori';
    protected $fillable=['id_kategori','kategori','keterangan'];
    protected $timestemps=true;


    // public function produk(){
    //     return $this->hasMany(Produkmodel::class);
    // }
}
    
