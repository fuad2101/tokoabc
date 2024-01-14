<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JnsBarangController;

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
    return view('Barang.index');
});

Route::get('/barang',[BarangController::class,'index']) ;
Route::get('/barang/create',[BarangController::class,'create']) ;
Route::post('/barang/create',[BarangController::class,'store']) ;
Route::post('/barang/{id}',[BarangController::class,'show']) ;
Route::put('/barang',[BarangController::class,'update']) ;
Route::delete('/barang/{id}',[BarangController::class,'delete']) ;



Route::get('/jns-barang',[JnsBarangController::class,'index']) ;
Route::get('/jns-barang/create',[JnsBarangController::class,'create']) ;
Route::post('/jns-barang/create',[JnsBarangController::class,'store']) ;
Route::post('/jns-barang/{id}',[JnsBarangController::class,'show']) ;
Route::put('/jns-barang',[JnsBarangController::class,'update']) ;
Route::delete('/jns-barang/{id}',[JnsBarangController::class,'delete']) ;




