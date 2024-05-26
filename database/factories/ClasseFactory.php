<?php

namespace Database\Factories;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classe>
 */
class ClasseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'libelle' => fake()->word(),
            'idformation' => Formation::inRandomOrder()->first()->idf,
            'NombreMax' => fake()->numberBetween(20,25),
        ];
    }
}
