<?php
//aqui definimos las urls de nuestra aplicacion, cada url se asocia a un controlador y a una funcion dentro de ese controlador, que es la que se encarga de procesar la solicitud y devolver una respuesta al usuario.

use Illuminate\Support\Facades\Route;


Route::get('/',[\App\Http\Controllers\HomeController::class, 'home'])
    ->name('home');

Route::get('/quienes-somos', function(){
    return view('quienessomos');
})->name('quienessomos');

Route::get('noticias', [\App\Http\Controllers\NoticiaController::class, 'index'])
    ->name('noticias.index');