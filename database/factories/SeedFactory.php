<?php

namespace Database\Factories;

use App\Models\Seed;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seed>
 */
class SeedFactory extends Factory
{
    protected $model = Seed::class;

    public function definition()
    {
        return [
            'scientific_name' => $this->faker->word,
            'family' => $this->faker->word,
            'genus' => $this->faker->word,
            'conservation_status' => $this->faker->randomElement(['EX', 'EW', 'CR', 'EN', 'VU', 'NT', 'LC', 'DD', 'NE']),
            'description' => $this->faker->paragraph,
            'registration_date' => $this->faker->date(),
        ];
    }
}
