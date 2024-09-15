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
    
    return view('home');

})->name('home');


Route::resource('/color','App\Http\Controllers\ColorController');
Route::resource('/marca','App\Http\Controllers\MarcaController');

Route::resource('/modelo','App\Http\Controllers\ModeloController');

// DESATIVE O COMENTARIO PARA LIGAR A ROTA
// Route::resource('/carro','App\Http\Controllers\CarroController');