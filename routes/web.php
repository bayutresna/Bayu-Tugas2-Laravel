<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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



Route::prefix('produk')->group(function(){
    Route::get('/',[ProdukController::class, "index"])->name("produk.index");
    Route::get('/create',[ProdukController::class, "create"])->name("produk.create");
    Route::get('/edit/{id}',[ProdukController::class, "edit"])->name("produk.edit");


    Route::post('/insert', [ProdukController::class, "insert"])->name("produk.insert");
    Route::put('/update/{id}',[ProdukController::class, "update"])->name("produk.update");

    Route::get('/delete/{id}', [ProdukController::class, "delete"]);
});
