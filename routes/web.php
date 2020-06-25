<?php

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
Route::get('siswa', 'SiswaController@index');
Route::post('siswa', 'SiswaController@store');
Route::get('siswa/{id}/edit', 'SiswaController@edit');
Route::patch('siswa/{id}', 'SiswaController@update');
Route::delete('siswa/{id}', 'SiswaController@destroy');
Route::get('guru', 'GuruController@index');
Route::post('guru', 'GuruController@store');
Route::get('guru/{id}/edit', 'GuruController@edit');
Route::patch('guru/{id}', 'GuruController@update');
Route::delete('guru/{id}', 'GuruController@destroy');

Route::get('kelas', 'KelasController@index');
Route::get('mapel', 'MapelController@index');
