<?php

namespace App\Models;

//Importa la clase Model de Eloquent para poder trabajar con la base de datos.
use Illuminate\Database\Eloquent\Model;

//Este modelo representa la tabla productos de la base de datos.
class Producto extends Model
{
    protected $table = 'productos';

    protected $primaryKey = 'producto_id';

    protected $fillable = ['nombre', 'descripcion', 'precio', 'imagen', 'stock', 'categoria'];
}
