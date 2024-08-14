<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});

Route::get('/stok', function(){
    return view('stok_darah.index', [
        "active" => 'stok',
        "title" => 'Stok'
    ]);
});
Route::get('/riwayat', function(){
    return view('riwayat.index', [
        "active" => 'riwayat',
        "title" => 'Riwayat'
    ]);
});

Route::get('/jadwal', function(){
    return view('jadwal.index', [
        "active" => 'jadwal',
        "title" => 'Jadwal'
    ]);
});

Route::get('/data', function(){
    return view('data.index', [
        "active" => 'data',
        "title" => 'Data'
    ]);
});

Route::get('/berita', function(){
    return view('berita.index', [
        "active" => 'berita',
        "title" => 'Berita'
    ]);
});

Route::get('/tips', function(){
    return view('tips.index', [
        "active" => 'tips',
        "title" => 'Tips'
    ]);
});

Route::get('/akun', function(){
    return view('akun.index', [
        "active" => 'akun',
        "title" => 'Akun'
    ]);
});
