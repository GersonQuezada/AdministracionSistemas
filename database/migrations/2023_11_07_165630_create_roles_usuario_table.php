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
        Schema::create('Roles_Usuarios', function (Blueprint $table) {
            $table->foreignId('VC_SISTEMA_ID')->constrained('Sistemas','id');
            $table->foreignId('IN_USUARIO_ID')->constrained('Usuarios','id');
            $table->foreignId('VC_ROL_ID')->constrained('Roles','id');
            $table->boolean('BT_ESTADO_FILA');
            $table->string('VC_USUARIO_CREACION');
            $table->string('VC_USUARIO_MODIFICACION');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Roles_Usuarios');
    }
};
