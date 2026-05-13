<?php

//Define el espacio de nombres donde se encuentran los seeders de la base de datos.
namespace Database\Seeders;

//Se utiliza para evitar eventos automáticos durante la ejecución de seeders.
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

//Importa la clase Seeder de Laravel.
//Permite crear seeders para insertar datos en la base de datos.
use Illuminate\Database\Seeder;

//Importa la clase DB para realizar consultas directas a la base de datos.
use Illuminate\Support\Facades\DB;

//Define el seeder NoticiaSeeder.
//Este seeder se encarga de cargar noticias en la base de datos.
class NoticiaSeeder extends Seeder
{
    /**
     * Método principal que ejecuta la inserción de datos.
     */
    public function run(): void
    {
        DB::table('noticias')->insert([
            [
                'titulo' => 'Nueva colección invierno',
                'contenido' => 'Llegaron nuevos buzos',
                'imagen' => 'coleccioninvierno.png',
                'fecha_publicacion' => '2026-05-09',
                'categoria' => 'Nuevo Ingreso',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Descuentos de temporada',
                'contenido' => 'Aprovechá descuentos del 30% en remeras.',
                'imagen' => 'descuentoremera.png',
                'fecha_publicacion' => '2026-05-10',
                'categoria' => 'Promociones',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Descuentos de temporada',
                'contenido' => 'Aprovechá descuentos del 15% en pantalones.',
                'imagen' => 'descuentotemporada.png',
                'fecha_publicacion' => '2026-05-11',
                'categoria' => 'Promociones',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Nueva colección de camperas',
                'contenido' => 'Llegaron las nuevas camperas.',
                'imagen' => 'coleccioncampera.png',
                'fecha_publicacion' => '2026-05-12',
                'categoria' => 'Nuevo Ingreso',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}