<?php

use App\Http\Controllers\Kategoricontroller;
use App\Http\Controllers\Produkcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('coba',Produkcontroller::class);
Route::resource('kategory',Kategoricontroller::class);
// Route::get('kategory/createK','Kategoricontroller@create');
// Route::get('kategory/editK','Kategoricontroller@edit');
// Route::get('kategory/indexK','Kategoricontroller@index');