<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobPost>
 */
class JobPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl,
            'company_id' => $this->faker->numberBetween(1, 10),
            'email' => $this->faker->email,
            'title' => $this->faker->sentence,
            'location_id' => $this->faker->numberBetween(1, 10),
            'type_id' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->paragraph,
            'qualification' => $this->faker->paragraph,
            'responsibility' => $this->faker->paragraph,
            'experience' => $this->faker->paragraph,
            'salary' => $this->faker->numberBetween(1000, 10000),
            'benefits' => $this->faker->paragraph,
            'gender' => $this->faker->randomElement(['male','feamle','any']),
            'vacancy' => $this->faker->numberBetween(1, 10),
            'deadline' => $this->faker->date,
            'status' => $this->faker->randomElement(['draft', 'published']),
        ];
        
    }
}
