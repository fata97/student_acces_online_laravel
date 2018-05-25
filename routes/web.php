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

Route::get('/', function () {
    return view('login');
});

Route::group(['prefix' => 'beranda'], function(){
  Route::get('/', 'BerandaController@index');
});


Route::group(['prefix' => 'siswa'], function(){
  Route::get('/', 'SiswaController@index');
  Route::get('/create', 'SiswaController@create');
  Route::get('/edit', 'SiswaController@edit');
  Route::get('/detail', 'SiswaController@detail');
});

Route::group(['prefix' => 'kelas'], function(){
  Route::get('/', 'KelasController@index');
  Route::get('/create', 'KelasController@create');
  Route::get('/edit', 'KelasController@edit');
});

Route::group(['prefix' => 'jurusan'], function(){
  Route::get('/', 'JurusanController@index');
  Route::get('/create', 'JurusanController@create');
  Route::get('/edit', 'JurusanController@edit');
});

Route::group(['prefix' => 'tahunajaran'], function(){
  Route::get('/', 'TahunAjaranController@index');
  Route::get('/create', 'TahunAjaranController@create');
  Route::get('/edit', 'TahunAjaranController@edit');
});

Route::group(['prefix' => 'guru'], function(){
  Route::get('/', 'GuruController@index');
  Route::get('/create', 'GuruController@create');
  Route::get('/edit', 'GuruController@edit');
});

Route::group(['prefix' => 'skill'], function(){
  Route::get('/', 'SkillController@index');
  Route::get('/detailskill', 'SkillController@detailskill');
  Route::get('/create_softskill', 'SkillController@createskill');
  Route::get('/edit_softskill', 'SkillController@editskill');
});

Route::group(['prefix' => 'pengaturansiswa'], function(){
  Route::get('/', 'PengaturanSiswaController@index');
  Route::get('/create', 'PengaturanSiswaController@create');
});

Route::group(['prefix' => 'pengaturanguru'], function(){
  Route::get('/', 'PengaturanGuruController@index');
  Route::get('/create', 'PengaturanGuruController@create');
});

Route::group(['prefix' => 'pelanggaran'], function(){
  Route::get('/', 'PelanggaranController@index');
  Route::get('/create', 'PelanggaranController@create');
  Route::get('/edit', 'PelanggaranController@edit');
});

Route::group(['prefix' => 'catatanpelanggaran'], function(){
  Route::get('/', 'CatatanPelanggaranController@index');
  Route::get('/create', 'CatatanPelanggaranController@create');
  Route::get('/edit', 'CatatanPelanggaranController@edit');
});

Route::group(['prefix' => 'menu'], function(){
  Route::get('/', 'MenuController@index');
  Route::get('/create_menuutama', 'MenuController@create_menuutama');
  Route::get('/create_submenu', 'MenuController@create_submenu');
  Route::get('/edit_menuutama', 'MenuController@edit_menuutama');
  Route::get('/edit_submenu', 'MenuController@edit_submenu');
});

Route::group(['prefix' => 'absensi'], function(){
  Route::get('/', 'AbsensiController@index');
  Route::get('/detailabsensi', 'AbsensiController@detailabsensi');
  Route::get('/edit', 'AbsensiController@edit');
});
