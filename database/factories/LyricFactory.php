<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lyric>
 */
class LyricFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->catchPhrase(),
            'author' => fake()->name(),
            'text' => "I want to break free, I want to break free
I want to break free from your lies
You're so self-satisfied I don't need you
I've got to break free
God knows, God knows I want to break free

I've fallen in love
I've fallen in love for the first time
This time I know it's for real
I've fallen in love, yeah
God knows, God knows I've fallen in love

It's strange but it's true, hey
I can't get over the way you love me like you do

But I have to be sure when I walk out that door
Oh, I want to be free, baby
Oh, how I want to be free
Oh, I want to break free

But life still goes on
I can't get used to living without, living without
Living without you by my side
I don't want to live alone, hey
God knows, got to make it on my own
So, baby, can't you see I've got to break free?

I've got to break free
I want to break free, yeah

I want, I want, I want
I want to break free"
        ];
    }
}