<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    // k: kategori
    Route::get('kategori', 'KategoriController@index')->name('kategori.index');
    Route::get('kategori/create', 'KategoriController@create')->name('kategori.create');
    Route::post('kategori', 'KategoriController@store')->name('kategori.store');
    Route::delete('kategori/{kategori:slug}', 'KategoriController@destroy')->name('kategori.destroy');
    Route::get('kategori/{kategori:slug}/edit', 'KategoriController@edit')->name('kategori.edit');
    Route::patch('kategori/{kategori:slug}', 'KategoriController@update')->name('kategori.update');
    
    // k: buku
    Route::resource('buku', 'BukuController', ['except' => 'show']);
    Route::get('status/{buku}', 'BukuController@bukuStatus')->name('buku.status');

    // k: peminjaman
    Route::get('pinjam', 'PeminjamanController@index')->name('pinjam.index');
    Route::get('pinjam/{buku}', 'PeminjamanController@store')->name('pinjam.store');
    Route::get('pinjam/{buku}', 'PeminjamanController@store')->name('pinjam.store');
    Route::get('status-buku/{peminjaman}', 'PeminjamanController@changeStatus')->name('pinjam.status');

    // k: pengembalian
    Route::get('pengembalian', 'PengembalianController@index')->name('pengembalian.index');
    Route::get('pengembalian-buku/{peminjaman}', 'PengembalianController@pengembalian')->name('pengembalian.kembali');


});
