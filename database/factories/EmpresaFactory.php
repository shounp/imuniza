<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empresa;
use App\Models\Endereco;

class EmpresaFactory extends Factory
{
    protected $model = Empresa::class;

    public function definition(): array
    {
        return [
            'nome_empresa' => $this->faker->company(),
            'cnpj' => $this->faker->numberBetween(1000000000000, 9999999999999), // 14 dígitos,
            'telefone' => $this->faker->numberBetween(1000000000, 9999999999), // 11 dígitos,
            'email' => $this->faker->unique(true, 100000)->safeEmail(),
            'endereco_id' => Endereco::factory(),
            'contador_empresas' => 10,
        ];
    }
}
