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
        Schema::create('marcos', function (Blueprint $table) {
            $table->id();
            $table->string('n_ley')->nullable();
            $table->string('url_ley')->nullable();
            $table->string('fuentes_normativas')->nullable();
            $table->string('tipo_fuente')->nullable();
            $table->string('nombre_fuente')->nullable();
            $table->string('url_fuente')->nullable();
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
        Schema::dropIfExists('marcos');
    }
};
