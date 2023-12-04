<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registro_usuarios_table', function (Blueprint $table) {
            $table->string('Nombre');
            $table->string('AP');
            $table->string('AM');
            $table->string('CorreoUsu');
            $table->string('puesto');
            $table->string('Contraseña');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
