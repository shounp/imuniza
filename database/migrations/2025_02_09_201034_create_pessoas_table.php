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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->integer('num_sus');
            $table->date('data_nascimento');
            $table->string('nome_mae');
            $table->string('sexo');
            $table->string('estado_civil');
            $table->string('escolaridade');
            $table->string('raca_cor');
            $table->string('plano_saude');
            $table->foreignId('endereco_id')->onDelete('cascade')->constrained('enderecos');
            $table->integer('contador_pessoas')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
