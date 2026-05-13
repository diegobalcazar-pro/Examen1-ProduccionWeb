<?php

namespace Database\Seeders;

//Importa y p ermite trabajar con usuarios en la base de datos.
use App\Models\User;

//Se utiliza para evitar eventos automáticos durante la ejecución de seeders.
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

//Importa la clase Seeder de Laravel.
//Sirven para insertar datos de prueba en la base de datos.
use Illuminate\Database\Seeder;

//Define el seeder principal de la aplicación.
//Desde aquí se ejecutan los demás seeders.
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Método principal que ejecuta los seeders..
     */
    public function run(): void
{

//Ejecuta los seeders ProductoSeeder y NoticiaSeeder para cargar datos en la base de datos.
    $this->call([
        ProductoSeeder::class,
        NoticiaSeeder::class,
    ]);
}
}


