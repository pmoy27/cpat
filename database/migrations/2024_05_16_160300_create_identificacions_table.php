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
        Schema::create('identificacions', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_registro')->nullable();
            $table->string('nombre')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('area_responsable')->nullable();
            $table->string('cargo_responsable')->nullable();
            $table->string('tipo_inicio')->nullable();
            $table->string('acto_inicio')->nullable();
            $table->string('acto_termino')->nullable();
            $table->string('producto_institucional')->nullable();
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
        Schema::dropIfExists('identificacions');
    }
};
