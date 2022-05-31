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
    return view('inicio');
});
Route::get('/info-general', function () {
    return view('navbar') . view('info_general');
});
Route::get('/campo-astronomia', function () {
    return view('navbar') . view('campo_astronomia');
});
Route::get('/aportacion-astronomia', function () {
    return view('navbar') . view('aportaciones');
});
Route::get('/teorias-astronomia', function () {
    return view('navbar') . view('teorias_astronomia');
});