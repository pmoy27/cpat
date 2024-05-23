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
        Schema::create('soportes', function (Blueprint $table) {
            $table->id();
            $table->string('nivel_digitalizacion')->nullable();
            $table->date('fecha_digitalizacion')->nullable();
            $table->string('canales_atencion')->nullable();
            $table->string('canales_transaccionales')->nullable();
            $table->string('tipo_expediente')->nullable();
            $table->string('acceso_expediente')->nullable();
            $table->string('url_inicio')->nullable();
            $table->string('chile_atiende')->nullable();
            $table->string('url_ficha')->nullable();
            $table->integer('n_plataformas')->nullable();
            $table->string('alcance_plataformas')->nullable();
            $table->string('plataforma_utilizado')->nullable();
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
        Schema::dropIfExists('soportes');
    }
};
