<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('pengguna','PenggunaController@awal');

Route::get('dosen/tambah','dosenController@tambah');
Route::get('dosen','dosenController@awal');

Route::get('mahasiswa/tambah','mahasiswaController@tambah');
Route::get('mahasiswa','mahasiswaController@awal');

Route::get('matakuliah/tambah','matakuliahController@tambah');
Route::get('matakuliah','matakuliahController@awal');

Route::get('ruangan/tambah','ruanganController@tambah');
Route::get('ruangan','ruanganController@awal');

Route::get('dosen_matakuliah/tambah','dosen_matakuliahController@tambah');
Route::get('dosen_matakuliah','dosen_matakuliahController@awal');

Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahController@tambah');
Route::get('jadwal_matakuliah','jadwal_matakuliahController@awal');

Route::get('/', function () {
    return view('welcome');
});
    Route::get('hello-world', function () {
    return 'Hello-World';
});
