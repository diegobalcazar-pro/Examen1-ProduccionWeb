<?php

namespace App\Http\Controllers;

//Importa la clase Request para manejar solicitudes y datos enviados por el usuario.
use Illuminate\Http\Request;

//Este controlador maneja la lógica de la página “Quiénes Somos”.
class QuienesSomosController extends Controller
{

//Este método se ejecuta cuando el usuario entra a la sección “Quiénes Somos”.
    public function index()
    {

//Retorna la vista llamada quienessomos para mostrar la página.
        return view('quienessomos');
    }
}