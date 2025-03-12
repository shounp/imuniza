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
        Schema::create('vacinas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('fabricante_id');
            $table->foreign('fabricante_id')->references('cnpj')->on('empresas')->onDelete('cascade');
            $table->string('lote');
            $table->date('validade');
            $table->integer('doses');
            $table->integer('contador_vacinas')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacinas');
    }
};
