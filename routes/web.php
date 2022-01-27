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

/* Route::get('/', function () {
    return view('welcome');
}); */

//Ruta index
Route::get('/',[ObjetoController::class,'index']);


//Ruta editar
Route::get('/Objetos/form-editar',[ObjetoController::class,'edit']);

//Ruta eliminar
