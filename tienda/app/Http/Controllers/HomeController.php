<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importa el modelo Producto.
//Permite trabajar con la tabla productos de la base de datos usando Eloquent.
use App\Models\Producto;

//HomeControlle se utilizan para manejar la lógica de las páginas y
//  conectar las vistas con la base de datos.
class HomeController extends Controller
{

//Este método se ejecuta cuando el usuario entra a la página principal.
    public function home()
    {

//Obtiene todos los productos de la base de datos y los guarda en la variable $allproductos.
        $allproductos = Producto::all();


// Retorna la vista home y envía los productos
        return view('home', [
            'productos' => $allproductos
        ]);
    }
}