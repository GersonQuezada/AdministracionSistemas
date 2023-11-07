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
        Schema::create('Catalogo', function (Blueprint $table) {
            $table->id('IN_ID');
            $table->string('VC_CODIGO')->nullable();
            $table->string('VC_NOMBRE')->nullable();
            $table->boolean('BT_ESTADO_FILA')->nullable();
            $table->string('VC_USUARIO_CREACION')->nullable();
            $table->string('VC_USUARIO_MODIFICACION')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Catalogo');
    }
};
