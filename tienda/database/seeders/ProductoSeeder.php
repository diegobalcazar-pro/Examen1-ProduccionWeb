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

//Define el seeder ProductoSeeder.
//Este seeder se encarga de cargar productos en la base de datos.
class ProductoSeeder extends Seeder
{
    /**
     * Método principal que ejecuta la inserción de datos.
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



