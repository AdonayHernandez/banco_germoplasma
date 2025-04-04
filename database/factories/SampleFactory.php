<?php

namespace Database\Factories;

use App\Models\Sample;
use Illuminate\Database\Eloquent\Factories\Factory;

class SampleFactory extends Factory
{
    protected $model = Sample::class;

    public function definition(): array
    {
        return [
            'accession_number' => $this->faker->unique()->bothify('ACC-####'),
            'collection_date' => $this->faker->date(),
            'location' => $this->faker->city(),
            'collector_name' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
