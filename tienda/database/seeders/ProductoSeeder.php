<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
    [
        'nombre' => 'Remera Oversize',
        'descripcion' => 'Remera urbana color negro',
        'precio' => 15000,
        'imagen' => 'remera.jpg',
        'stock' => 10,
        'categoria' => 'Remeras',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nombre' => 'Buzo Hoodie',
        'descripcion' => 'Buzo gris con capucha',
        'precio' => 25000,
        'imagen' => 'buzo.jpg',
        'stock' => 5,
        'categoria' => 'Buzos',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nombre' => 'Pantalón Jean',
        'descripcion' => 'Pantalón Jean celeste',
        'precio' => 20000,
        'imagen' => 'pantalon.jpg',
        'stock' => 8,
        'categoria' => 'Pantalones',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nombre' => 'Campera roja',
        'descripcion' => 'Campera roja reversible',
        'precio' => 45000,
        'imagen' => 'campera.jpg',
        'stock' => 7,
        'categoria' => 'Camperas',
        'created_at' => now(),
        'updated_at' => now(),
    ]
]);
    }
}



