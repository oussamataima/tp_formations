<?php

namespace Database\Factories;

use App\Models\Etudiant;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Avis>
 */
class AvisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idE' => Etudiant::inRandomOrder()->first()->codeE,
            'idF' => Formation::inRandomOrder()->first()->idf,
            'points' => fake()->numberBetween(1, 5),
        ];
    }
}
