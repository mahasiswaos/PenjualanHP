<?php

$NS = 'App\\Controllers\\';

Route::get('/test', $NS . 'TestController@view');
Route::get('/test/add', $NS . 'TestController@add');
Route::get('/test/add/proses', $NS . 'TestController@addProses');
Route::get('/test/edit/{id}', $NS . 'TestController@edit');
Route::get('/test/edit/proses', $NS . 'TestController@editProses');
Route::get('/test/delete/{id}', $NS . 'TestController@delete');

Route::get('/pembeli',$NS .'PembeliController1@tampil');
Route::get('/pembeli/add',$NS .'PembeliController1@tambah');
Route::get('/pembeli/view',$NS .'PembeliController1@tampil');
Route::post('/pembeli/addProses',$NS .'PembeliController1@simpan');
Route::get('/pembeli/edit/{id}',$NS .'PembeliController1@edit');
Route::post('/pembeli/edit/proses/{id}',$NS .'PembeliController1@editProses');
Route::get('/pembeli/delete/{id}',$NS .'PembeliController1@Hapus');

Route::get('/Hp',$NS .'HpController1@tampil');
Route::get('/Hp/add',$NS .'HpController1@tambah');
Route::post('/Hp/addproses',$NS .'HpController1@addproses');
Route::get('/Hp/edit/{id}',$NS .'HpController1@edit');
Route::post('/Hp/edit/proses/{id}',$NS .'HpController1@proses');
Route::get('/Hp/delete/{id}',$NS .'HpController1@delete');

Route::get('/transaksi',$NS .'TransaksiController1@tampil');
Route::get('/transaksi/add',$NS .'TransaksiController1@tambah');
Route::get('/transaksi/addProses',$NS .'TransaksiController1@simpanProses');
Route::post('/transaksi/tambahProses',$NS .'TransaksiController1@simpanProses');
Route::get('/transaksi/edit/{id}',$NS .'TransaksiController1@edit');
Route::post('/transaksi/edit/proses/{id}',$NS .'TransaksiController1@proses');
Route::get('/transaksi/delete/{id}',$NS .'TransaksiController1@Hapus');