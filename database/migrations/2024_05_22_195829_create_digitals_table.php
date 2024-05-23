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
        Schema::create('digitals', function (Blueprint $table) {
            $table->id();
            $table->string('autenticacion')->nullable();
            $table->string('firma_electronica')->nullable();
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
        Schema::dropIfExists('digitals');
    }
};
