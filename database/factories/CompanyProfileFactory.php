<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyProfile>
 */
class CompanyProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,   
            'tagline' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            
            'website' => $this->faker->url,
            'facebook' => $this->faker->url,
            'twitter' => $this->faker->url,
            'linkin' => $this->faker->url,
            'logo' => $this->faker->imageUrl,
        ];
    }
}
