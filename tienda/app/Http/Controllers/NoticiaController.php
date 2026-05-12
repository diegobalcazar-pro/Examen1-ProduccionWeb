<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index()
    {
         $allnoticias = Noticia::all();

         //debe ser noticias.index
        return view('noticias.index', [
            'noticias' => $allnoticias
        ]);
    }
}
