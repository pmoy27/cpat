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
        Schema::create('datos', function (Blueprint $table) {
            $table->id();
            $table->string('expediente_otro_organo')->nullable();
            $table->string('medio_utilizado')->nullable();
            $table->string('institucion')->nullable();
            $table->string('tipo_informacion')->nullable();
            $table->string('identifique_dato')->nullable();
            $table->string('identifique_documento')->nullable();
            $table->string('enviar_comunicaciones')->nullable();
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
        Schema::dropIfExists('datos');
    }
};
