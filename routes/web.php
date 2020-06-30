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

    return view('pages.index');
});
// Routes Siswa
Route::get('siswa', 'SiswaController@index');
Route::get('siswa/create', 'SiswaController@create');
Route::get('siswa/{idSiswa}', 'SiswaController@show');
Route::post('siswa', 'SiswaController@store');
Route::get('siswa/{idSiswa}/edit', 'SiswaController@edit');
Route::patch('siswa/{idSiswa}', 'SiswaController@update');
Route::delete('siswa/{idSiswa}', 'SiswaController@destroy');
// Routes Guru
Route::get('guru', 'GuruController@index');
Route::get('guru/create', 'GuruController@create');
Route::get('guru/{idGuru}', 'GuruController@show');
Route::post('guru', 'GuruController@store');
Route::get('guru/{idGuru}/edit', 'GuruController@edit');
Route::patch('guru/{idGuru}', 'GuruController@update');
Route::delete('guru/{idGuru}', 'GuruController@destroy');

Route::get('kelas', 'KelasController@index');
Route::get('mapel', 'MapelController@index');
