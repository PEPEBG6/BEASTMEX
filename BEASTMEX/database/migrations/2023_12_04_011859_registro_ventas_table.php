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
        Schema::create('registro_ventas_table', function (Blueprint $table) {
            $table->string('Producto');
            $table->date('Fecha');
            $table->string('Cliente');
            $table->string('CantidadPro');
            $table->string('Marca');
            $table->string('Precio');
            $table->string('total');
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
