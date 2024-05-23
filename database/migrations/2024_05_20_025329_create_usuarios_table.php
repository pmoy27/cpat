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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('pago_asociado')->nullable();
            $table->string('tipo_moneda')->nullable();
            $table->string('monto_pagar')->nullable();
            $table->string('tipo_usuario')->nullable();
            $table->string('segmento_usuario')->nullable();
            $table->string('registro_social')->nullable();
            $table->string('disponibilidad')->nullable();
            $table->unsignedBigInteger('id_procedimiento');
            $table->foreign('id_procedimiento')->references('id')->on('procedimientos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
