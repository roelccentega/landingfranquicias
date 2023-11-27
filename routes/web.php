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

Route::get('/','InicioController@index');
Route::get('/contacto','InicioController@contacto');
Route::post('/contacto','InicioController@postContactanos');
Route::get('/contacto/mensaje','InicioController@mensaje');