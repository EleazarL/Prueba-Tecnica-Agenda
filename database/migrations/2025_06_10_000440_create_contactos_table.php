<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id(); // ID autoincremental
            $table->string('nombre'); // Nombre
            $table->bigInteger('telefono'); // Teléfono
            $table->date('fecha_nacimiento'); // Fecha de nacimiento
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};