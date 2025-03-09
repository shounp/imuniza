<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pessoa;
use App\Models\Empresa;
use App\Models\Vacina;
use App\Models\Pessoa_vacina;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Cria 10 empresas (cada uma com um endereço associado)
        Empresa::factory()->count(10)->create();

        // Cria 20 vacinas (usando as empresas criadas)
        Vacina::factory()->count(20)->create();

        // Cria 50 pessoas (cada uma com um endereço associado)
        Pessoa::factory()->count(50)->create();

        // Cria 100 registros de pessoa_vacina
        Pessoa_vacina::factory()->count(100)->create();
    }
}