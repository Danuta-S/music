<?php

namespace Database\Factories;

use App\Models\Artist;
use App\Models\Lyric;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->catchPhrase(),
            'artist_id' => Artist::inRandomOrder()->first()->id,
            'length' => fake()->randomFloat(2, 1, 7),
            'released' => fake()->year(),
            'lyric_id' => Lyric::inRandomOrder()->first()->id,
            'positive' => fake()->boolean()
        ];
    }
}

