<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class HomeController extends Controller
{
    public function home()
    {
        $allproductos = Producto::all();


        return view('home', [
            'productos' => $allproductos
        ]);
    }
}