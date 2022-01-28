<?php

use App\Http\Controllers\ObjetoController;
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

//Route::get('/', function () {return view('welcome');});

Route::get('/',[ObjetoController::class,'index']);
//TO BE CONTONUED
Route::get('/objetos/create',[ObjetoController::class,'create'])->name('objetos.create');
//Ruta eliminación de elemento en la DB
Route::delete('/delete-object/{id}',[ObjetoController::class,'destroy']);
