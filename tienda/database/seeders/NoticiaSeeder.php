<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
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