<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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




Route::get('/', 'penyebaranController@index');
Route::get('/{id}/editpenyebaran', 'penyebaranController@edit');
Route::patch('/{id}', 'penyebaranController@update');

Route::get('/about', function () {
    return view('about');
});

Route::get('/panduan', function () {
    return view('panduan');
});
Route::get('/tes-covid', 'pertanyaanController@index');
Route::post('/pertanyaan', 'pertanyaanController@store');

Route::get('/hasil', 'hasilController@index');
Route::get('/hasil/{id}', 'hasilController@get');

Route::get('history', 'historyController@index');

//Route::get('/rumahSakit', 'rumahSakitController@index');
//Route::get('/hotel', 'hotelController@index');
//Route::get('/wismaAtlet', 'wismaAtletController@index');
//Route::get('/puskesmas', 'puskesmasController@index');

//rumah sakit
Route::get('rumah-sakit', 'rumahSakitController@index');
Route::get('tambahrumahsakit', 'rumahSakitController@create');
Route::post('rumah-sakit', 'rumahSakitController@store');
Route::delete('rumah-sakit/{id}', 'rumahSakitController@destroy');
Route::get('rumah-sakit/{id}/editrs', 'rumahSakitController@edit');
Route::patch('rumah-sakit/{id}', 'rumahSakitController@update');


//puskesmas
Route::get('puskesmas', 'puskesmasController@index');
Route::get('tambahpuskesmas', 'puskesmasController@create');
Route::post('puskesmas', 'puskesmasController@store');
Route::delete('puskesmas/{id}', 'puskesmasController@destroy');
Route::get('puskesmas/{id}/editpuskesmas', 'puskesmasController@edit');
Route::patch('puskesmas/{id}', 'puskesmasController@update');

//hotel
Route::get('hotel', 'hotelController@index');
Route::get('tambahhotel', 'hotelController@create');
Route::post('hotel', 'hotelController@store');
Route::delete('hotel/{id}', 'hotelController@destroy');
Route::get('hotel/{id}/edithotel', 'hotelController@edit');
Route::patch('hotel/{id}', 'hotelController@update');

//wisma-atlet
Route::get('wisma-atlet', 'wismaatletController@index');
Route::get('tambahwismaatlet', 'wismaatletController@create');
Route::post('wisma-atlet', 'wismaatletController@store');
Route::delete('wisma-atlet/{id}', 'wismaatletController@destroy');
Route::get('wisma-atlet/{id}/editwismaatlet', 'wismaatletController@edit');
Route::patch('wisma-atlet/{id}', 'wismaatletController@update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
