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
            'cnpj' => $this->faker->unique(true, 100000)->numerify('##.###.###/####-##'),
            'telefone' => $this->faker->numerify('(##) #####-####'),
            'email' => $this->faker->unique(true, 100000)->safeEmail(),
            'endereco_id' => Endereco::factory(),
            'contador_empresas' => 10,
        ];
    }
}
