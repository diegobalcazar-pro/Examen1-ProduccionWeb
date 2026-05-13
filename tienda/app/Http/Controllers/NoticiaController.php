<?php

namespace App\Http\Controllers;

//Importa la clase Request para manejar datos enviados por el usuario.
use Illuminate\Http\Request;

//Importa el modelo Noticia para trabajar con la tabla noticias de la base de datos.
use App\Models\Noticia;

//Define el controlador NoticiaController.
//Este controlador maneja la lógica relacionada con las noticias/novedades.
class NoticiaController extends Controller
{

//Este método se utiliza para mostrar todas las noticias.
    public function index()
    {

//Este método se utiliza para mostrar todas las noticias.
        $allnoticias = Noticia::all();

//Retorna la vista noticias.index y le envía todas las noticias obtenidas de la base de datos.
        return view('noticias.index', [
            'noticias' => $allnoticias
        ]);
    }
}
