<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BlogController;

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
    return view('template');
});



Route::prefix('produk')->group(function(){
    Route::get('/',[ProdukController::class, "index"])->name("produk.index");
    Route::get('/create',[ProdukController::class, "create"])->name("produk.create");
    Route::get('/edit/{id}',[ProdukController::class, "edit"])->name("produk.edit");


    Route::post('/insert', [ProdukController::class, "insert"])->name("produk.insert");
    Route::put('/update/{id}',[ProdukController::class, "update"])->name("produk.update");

    Route::get('/delete/{id}', [ProdukController::class, "delete"])->name('produk.delete');
});

Route::prefix('blog')->group(function(){
    Route::get('/',[BlogController::class, "index"])->name("blog.index");
    Route::get('/create',[BlogController::class, "create"])->name("blog.create");
    Route::get('/edit/{id}',[BlogController::class, "edit"])->name("blog.edit");
    Route::get('/detail/{id}', [BlogController::class,'detail'])->name("blog.detail");

    Route::post('/insert', [BlogController::class, "insert"])->name("blog.insert");
    Route::put('/update/{id}',[BlogController::class, "update"])->name("blog.update");

    Route::get('/delete/{id}', [BlogController::class, "delete"])->name('blog.delete');
});
