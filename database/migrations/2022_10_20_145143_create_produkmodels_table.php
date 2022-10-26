<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produkmodels', function (Blueprint $table) {
            $table->id('id_produk');
            $table->foreignId('id_kategori');
            $table->string('nama', 50);
            $table->string('deskripsi', 200);
            $table->decimal('harga', 9);
            $table->decimal('stok', 9);
            $table->foreign('id_kategori')->references('id_kategori')->on('kategorimodels')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produkmodels');
    }
};