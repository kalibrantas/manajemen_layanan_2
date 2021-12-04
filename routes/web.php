<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Http\Middleware\SimpleTokenMiddleware;

$router->get('/', function () use ($router) {
    return $router->app->version();
});



$router->group(['prefix' => 'layanan_absensi','middleware' => SimpleTokenMiddleware::class],function () use ($router) {
    $router->get('cuti',  ['uses' => 'CutiController@showAll']);

    $router->get('cuti/{id}', ['uses' => 'CutiController@showOne']);

    $router->post('cuti', ['uses' => 'CutiController@create']);

    $router->delete('cuti/{id}', ['uses' => 'CutiController@delete']);

    $router->put('cuti/{id}', ['uses' => 'CutiController@update']); 

    $router->post('presensi', ['uses' => 'PresensiController@create']);
});

$router->group(['prefix' => 'layanan_data_pegawai','middleware' => SimpleTokenMiddleware::class],function () use ($router) {
    $router->get('pegawai',  ['uses' => 'PegawaiController@showAll']);

    $router->get('pegawai/{id}', ['uses' => 'PegawaiController@showOne']);

    $router->post('pegawai', ['uses' => 'PegawaiController@create']);

    $router->delete('pegawai/{id}', ['uses' => 'PegawaiController@delete']);

    $router->put('pegawai/{id}', ['uses' => 'PegawaiController@update']); 
});

$router->group(['prefix' => 'layanan_kinerja_pegawai','middleware' => SimpleTokenMiddleware::class],function () use ($router) {
    $router->get('penilaian_kinerja',  ['uses' => 'CapaianBulananController@showAll']);

    $router->get('penilaian_kinerja/{id}', ['uses' => 'CapaianBulananController@showOne']);

    $router->post('penilaian_kinerja', ['uses' => 'CapaianBulananController@create']);

    $router->delete('penilaian_kinerja/{id}', ['uses' => 'CapaianBulananController@delete']);

    $router->put('penilaian_kinerja/{id}', ['uses' => 'CapaianBulananController@update']); 

    $router->get('kegiatan_harian',  ['uses' => 'KegiatanHarianController@showAll']);

    $router->get('kegiatan_harian/{id}', ['uses' => 'KegiatanHarianController@showOne']);

    $router->post('kegiatan_harian', ['uses' => 'KegiatanHarianController@create']);

    $router->delete('kegiatan_harian/{id}', ['uses' => 'KegiatanHarianController@delete']);

    $router->put('kegiatan_harian/{id}', ['uses' => 'KegiatanHarianController@update']); 
});
