<?php

namespace App\Models;

//Importa la clase Model de Eloquent para poder trabajar con la base de datos.
use Illuminate\Database\Eloquent\Model;

//Este modelo representa la tabla noticias de la base de datos.
class Noticia extends Model
{
    protected $table = 'noticias';

    protected $primaryKey = 'noticia_id';

    protected $fillable = ['titulo', 'contenido', 'imagen', 'fecha_publicacion', 'categoria'];
}
