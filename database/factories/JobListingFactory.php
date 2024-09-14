<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobListing>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $isFeatured = fake()->randomElement(['0', '1']);

        $randomNumberForPicture = rand(0, 10000);
        $imageWidthAndHeight = $isFeatured ? '42' : '100';

        return [
            'title' => fake()->jobTitle(),
            'description' => fake()->realText(),
            'salary' => fake()->numberBetween(10000, 100000),
            'job_owner_id' => User::all()->random()->id,
            'image_url' => "https://picsum.photos/seed/$randomNumberForPicture/$imageWidthAndHeight",
            'schedule' => fake()->randomElement(['Full Time', 'Part Time']),
            'featured' => $isFeatured
        ];
    }
}
