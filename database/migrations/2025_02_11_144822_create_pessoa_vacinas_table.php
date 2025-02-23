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
        Schema::create('pessoa_vacinas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pessoa_id')->onDelete('cascade')->constrained('pessoas');
            $table->foreignId('vacina_id')->onDelete('cascade')->constrained('vacinas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoa_vacinas');
    }
};
