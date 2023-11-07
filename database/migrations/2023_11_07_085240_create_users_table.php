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
            $table->foreignId('IN_PERSONA_ID')->constrained( 'persons' , 'IN_ID');
            $table->string('VC_NOMBRE_USUARIO')->unique();
            $table->string('VC_PASSWORD');
            $table->string('VC_CORREO');
            $table->string('VC_CELULAR');
            $table->dateTime('DT_EXPIRACION_PASSWORD');
            $table->boolean('BT_ESTADO_FILA');
            $table->string('VC_USUARIO_CREACION');
            $table->string('VC_USUARIO_MODIFICACION');
            $table->boolean('BT_ACT_PASSWORD_OBLIGATORIO');
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
