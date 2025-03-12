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
        Schema::create('empresas', function (Blueprint $table) {
            $table->string('cnpj')->unique()->primary();
            $table->string('nome_empresa');
            $table->string('telefone');
            $table->string('email');
            $table->foreignId('endereco_id')->onDelete('cascade')->constrained('enderecos');
            $table->integer('contador_empresas')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
