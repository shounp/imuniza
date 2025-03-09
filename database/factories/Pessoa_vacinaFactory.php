<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pessoa_vacina;
use App\Models\Pessoa;
use App\Models\Vacina;

class Pessoa_vacinaFactory extends Factory // Nome da classe ajustado
{
    protected $model = Pessoa_vacina::class;

    public function definition(): array
    {
        $vacina = Vacina::inRandomOrder()->first() ?? Vacina::factory()->create();
        
        return [
            'pessoa_id' => Pessoa::factory(),
            'vacina_id' => $vacina->id,
            'dose' => $this->faker->numberBetween(1, $vacina->doses),
        ];
    }
}