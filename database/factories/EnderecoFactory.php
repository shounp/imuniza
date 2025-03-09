<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Endereco;

class EnderecoFactory extends Factory
{
    protected $model = Endereco::class;

    public function definition(): array
    {
        return [
            'cep' => $this->faker->numerify('########'), // 8 dígitos sem hífen
            'country' => 'Brasil',
            'city' => $this->faker->city(),
            'state' => $this->faker->stateAbbr(),
            'district' => $this->faker->word(),
            'street' => $this->faker->streetName(),
            'number' => $this->faker->buildingNumber(),
            'complement' => $this->faker->optional()->secondaryAddress(),
        ];
    }
}