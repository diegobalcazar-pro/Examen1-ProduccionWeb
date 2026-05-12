<?php
//aqui definimos las urls de nuestra aplicacion, cada url se asocia a un controlador y a una funcion dentro de ese controlador, que es la que se encarga de procesar la solicitud y devolver una respuesta al usuario.

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuienesSomosController;
use App\Http\Controllers\NoticiaController;

Route::get('/',[\App\Http\Controllers\HomeController::class, 'home'])
    ->name('home');

Route::get('/quienessomos', function(){
    return view('quienessomos');
})->name('quienessomos');

Route::get('noticias', [\App\Http\Controllers\NoticiaController::class, 'index'])
    ->name('noticias.index');