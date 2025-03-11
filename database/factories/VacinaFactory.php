<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vacina;
use App\Models\Empresa;

class VacinaFactory extends Factory
{
    protected $model = Vacina::class;

    public function definition(): array
    {
        return [
            'nome' => 'Vacina ' . $this->faker->unique()->numberBetween(1, 1000), // Gera nomes como "Vacina 1", "Vacina 2", etc.
            'lote' => $this->faker->numerify('LOT-#####'),
            'validade' => $this->faker->date('Y-m-d', '+2 years'),
            'doses' => $this->faker->numberBetween(1, 3),
            'fabricante_id' => Empresa::factory(),
            'contador_vacinas' => 20,
        ];
    }
}
