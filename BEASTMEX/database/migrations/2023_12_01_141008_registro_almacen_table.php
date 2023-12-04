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
        Schema::create('registro_almacen_table', function (Blueprint $table) {
            $table->string('almNombre');
            $table->string('almNoSerie');
            $table->string('almMarca');
            $table->string('almCantidad');
            $table->string('almCostoC');
            $table->string('almPrecioVen');
            $table->date('almFechaIn');
            $table->string('almImagen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_almacen_table');
    }
};
