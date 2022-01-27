<?php

use App\Http\Controllers\ObjetoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObjetoController;


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

<<<<<<< HEAD
/* Route::get('/', function () {
    return view('welcome');
}); */

//Ruta index
Route::get('/',[ObjetoController::class,'index']);


//Ruta editar
Route::get('/Objetos/form-editar',[ObjetoController::class,'edit']);

//Ruta eliminar
=======
//Route::get('/', function () {return view('welcome');});

Route::get('/',[ObjetoController::class,'index'])->name('objetos.index');
//TO BE CONTONUED
Route::get('/objetos/create',[ObjetoController::class,'create'])->name('objetos.create');
>>>>>>> 656b5cec1dad0af8e85bc792558f97d5ba20ba7f
