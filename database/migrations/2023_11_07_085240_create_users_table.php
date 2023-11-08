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
        Schema::create('Usuarios', function (Blueprint $table) {
            $table->id('IN_ID');
            $table->foreignId('IN_PERSONA_ID')->constrained( 'Personas' , 'IN_ID')->nullable();
            $table->string('VC_NOMBRE_USUARIO')->unique();
            $table->string('VC_PASSWORD');
            $table->string('VC_CORREO')->nullable();
            $table->string('VC_CELULAR')->nullable();
            $table->dateTime('DT_EXPIRACION_PASSWORD')->nullable();
            $table->boolean('BT_ESTADO_FILA')->nullable();
            $table->string('VC_USUARIO_CREACION')->nullable();
            $table->string('VC_USUARIO_MODIFICACION')->nullable();
            $table->boolean('BT_ACT_PASSWORD_OBLIGATORIO')->nullable();
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Usuarios');
    }
};
