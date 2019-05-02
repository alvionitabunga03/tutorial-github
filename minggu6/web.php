<?php

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

Route::get('/produk', 'produkController@index');

Route::get('/halaman',function() 
{
	$title = 'Harry Pooter';
	$konten = 'harry potter and the deathly hallows: part2';
	return view('konten/halaman',compact('title','konten'));
});

Route::get('/pelanggan', 'pelangganController@index');

Route::resource('produk','produkController');

Route::get('/produk/store', 'produkController@store');

Route::get('/produk/update', 'produkController@update');

Route::get('/produk/delete', 'produkController@delete');

Route::resource('produk','produkController');

Route::get('/', function() {
	return view('login');
});