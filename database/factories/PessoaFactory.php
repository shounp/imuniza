<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pessoa;
use App\Models\Endereco;

class PessoaFactory extends Factory
{
    protected $model = Pessoa::class;

    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),
            'cpf' => $this->faker->unique(true, 100000)->numerify('###.###.###-##'),
            'num_sus' => $this->faker->numberBetween(100000000, 999999999), // 10 dígitos
            'data_nascimento' => $this->faker->date('Y-m-d', '2000-01-01'),
            'nome_mae' => $this->faker->name('female'),
            'sexo' => $this->faker->randomElement(['Masculino', 'Feminino']),
            'estado_civil' => $this->faker->randomElement(['Solteiro', 'Casado', 'Divorciado', 'Viúvo']),
            'escolaridade' => $this->faker->randomElement(['Fundamental', 'Médio', 'Superior']),
            'raca_cor' => $this->faker->randomElement(['Branca', 'Preta', 'Parda', 'Amarela', 'Indígena']),
            'plano_saude' => $this->faker->randomElement(['Sim', 'Não']),
            'endereco_id' => Endereco::factory(),
            // 'contador_pessoas' => $this->count(50),
            'contador_pessoas' => 50,
        ];
    }
}
