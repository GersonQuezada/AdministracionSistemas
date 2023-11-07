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
        Schema::create('catalogo_detalle', function (Blueprint $table) {
            $table->id('IN_ID');
            $table->foreignId('IN_ID_CATALOGO')->constrained('Catalogo','IN_ID');
            // IN_ID
            // IN_ID_CATALOGO
            // VC_CODIGO
            // VC_VALOR
            // VC_DESCRIPCION
            // IN_ORDEN
            // BT_ESTADO_FILA
            // VC_USUARIO_CREACION
            // DT_FECHA_CREACION
            // VC_USUARIO_MODIFICACION
            // DT_FECHA_MODIFICACION
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogo_detalle');
    }
};
