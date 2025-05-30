<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuCobaController;
use App\Http\Controllers\ListProdukController;
use App\Http\Controllers\LatFlowController;
use App\Http\Controllers\viewAllController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages/home');
});

Route::get('/list-produk', function() {
    return view('list_product');
});

Route::get('/latFlow', function() {
    return view('pages/home');
});

Route::get('/register', function() {
    return view('pages/register');
});

Route::get('/login', function() {
    return view('pages/login');
});

Route::get('/viewAll', function() {
    return view('pages/viewAll');
});

Route::get('/orderList', function() {
    return view('pages/orderList');
});

Route::get('/forgotPassword1', function() {
    return view('pages/forgotPassword1');
});

Route::get('/forgotPassword2', function() {
    return view('pages/forgotPassword2');
});

Route::get('/inputProduk', function() {
    return view('inputProduk');
});

Route::get('/home', [MenuCobaController::class, 'test']);
Route::get('/list-produk', [ListProdukController::class, 'tampilProduk']);
Route::get('/latFlow', [LatFlowController::class, 'tampilFlow']);
Route::get('/viewAll', [viewAllController::class, 'tampilProduk']);
Route::get('/list_produk', [ListProdukController::class, 'show']);
Route::post('/list_produk', [ListProdukController::class, 'simpan'])->name('produk.simpan');