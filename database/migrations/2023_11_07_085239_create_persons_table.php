<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Personas', function (Blueprint $table) {
            $table->id();
            $table->string('VC_NOMBRE');
            $table->string('VC_APELLIDO_PATERNO');
            $table->string('VC_APELLIDO_MATERNO');
            $table->string('VC_NOMBRECOMPLETO');
            $table->string('VC_DNI');
            $table->boolean('BT_ESTADO_FILA')->default('1');
            $table->string('VC_USUARIO_CREACION');
            $table->string('VC_USUARIO_MODIFICACION')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Personas');
    }
};
