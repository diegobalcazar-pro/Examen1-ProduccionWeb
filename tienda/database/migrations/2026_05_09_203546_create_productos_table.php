<?php

//Importa la clase Migration de Laravel. Crea y modifica tablas en la base de datos.
use Illuminate\Database\Migrations\Migration;

//Importa la clase Blueprint. Define la estructura y columnas de una tabla.
use Illuminate\Database\Schema\Blueprint;

//Importa la clase Schema.
//Se utiliza para crear, modificar y eliminar tablas en la base de datos.
use Illuminate\Support\Facades\Schema;

//Crea una migración anónima que hereda de Migration.
//Las migraciones administran cambios en la base de datos.
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
        $table->id('producto_id');
        $table->string('nombre');
        $table->text('descripcion');
        $table->decimal('precio', 8, 2);
        $table->string('imagen');
        $table->integer('stock');
        $table->string('categoria');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};