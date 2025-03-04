<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pessoa_vacinas', function (Blueprint $table) {
            $table->integer('dose')->after('vacina_id'); // Adiciona a coluna 'dose' após 'vacina_id'
        });
    }

    public function down(): void
    {
        Schema::table('pessoa_vacinas', function (Blueprint $table) {
            $table->dropColumn('dose'); // Remove a coluna se a migration for revertida
        });
    }
};