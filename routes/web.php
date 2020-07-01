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

// Routes Siswa
Route::get('siswa', 'SiswaController@index')->middleware('auth');
Route::get('siswa/create', 'SiswaController@create')->middleware('auth');
Route::get('siswa/{idSiswa}', 'SiswaController@show')->middleware('auth');
Route::post('siswa', 'SiswaController@store')->middleware('auth');
Route::get('siswa/{idSiswa}/edit', 'SiswaController@edit')->middleware('auth');
Route::patch('siswa/{idSiswa}', 'SiswaController@update')->middleware('auth');
Route::delete('siswa/{idSiswa}', 'SiswaController@destroy')->middleware('auth');
// Routes Guru
Route::get('guru', 'GuruController@index')->middleware('auth');
Route::get('guru/create', 'GuruController@create')->middleware('auth');
Route::get('guru/{idGuru}', 'GuruController@show')->middleware('auth');
Route::post('guru', 'GuruController@store')->middleware('auth');
Route::get('guru/{idGuru}/edit', 'GuruController@edit')->middleware('auth');
Route::patch('guru/{idGuru}', 'GuruController@update')->middleware('auth');
Route::delete('guru/{idGuru}', 'GuruController@destroy')->middleware('auth');
// Routes Kelas
Route::get('kelas', 'KelasController@index')->middleware('auth');
Route::get('kelas/create', 'KelasController@create')->middleware('auth');
Route::get('kelas/{id}', 'KelasController@show')->middleware('auth');
Route::post('kelas', 'KelasController@store')->middleware('auth');
Route::get('kelas/{idKelas}/edit', 'KelasController@edit')->middleware('auth');
Route::patch('kelas/{idKelas}', 'KelasController@update')->middleware('auth');
Route::delete('kelas/{idKelas}', 'KelasController@destroy')->middleware('auth');
// Routes Mapel
Route::get('mapel', 'MapelController@index')->middleware('auth');
Route::get('mapel/create', 'MapelController@create')->middleware('auth');
Route::get('mapel/{idMapel}', 'MapelController@show')->middleware('auth');
Route::post('mapel', 'MapelController@store')->middleware('auth');
Route::get('mapel/{idMapel}/edit', 'MapelController@edit')->middleware('auth');
Route::patch('mapel/{idMapel}', 'MapelController@update')->middleware('auth');
Route::delete('mapel/{idMapel}', 'MapelController@destroy')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
