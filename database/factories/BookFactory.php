<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'genre_id' => \App\Models\Genre::inRandomOrder()->first()->id,
            'author' => $this->faker->name,
            'number_of_pages' => $this->faker->numberBetween(20, 1000),
            'release_date' => $this->faker->dateTimeBetween('-100 years')
        ];
    }
}
