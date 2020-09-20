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
    Route::get('kategori', 'KategoriController@index')->name('kategori.index');
    Route::get('kategori/create', 'KategoriController@create')->name('kategori.create');
    Route::post('kategori', 'KategoriController@store')->name('kategori.store');
    Route::delete('kategori/{kategori:slug}', 'KategoriController@destroy')->name('kategori.destroy');
    Route::get('kategori/{kategori:slug}/edit', 'KategoriController@edit')->name('kategori.edit');
    Route::patch('kategori/{kategori:slug}', 'KategoriController@update')->name('kategori.update');
    Route::get('/home', 'HomeController@index')->name('home');
});
