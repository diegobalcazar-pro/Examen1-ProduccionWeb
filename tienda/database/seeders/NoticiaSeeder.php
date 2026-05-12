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
                'contenido' => 'Llegaron nuevos buzos y camperas urbanas.',
                'imagen' => 'invierno.jpg',
                'fecha_publicacion' => '2026-05-09',
                'categoria' => 'Moda',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Descuentos de temporada',
                'contenido' => 'Aprovechá descuentos del 30% en remeras.',
                'imagen' => 'descuentos.jpg',
                'fecha_publicacion' => '2026-05-09',
                'categoria' => 'Promociones',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}