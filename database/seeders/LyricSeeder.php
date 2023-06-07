<?php

namespace Database\Seeders;

use App\Models\Lyric;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LyricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lyric::factory()
            ->count(30)
            ->create();
    }
}
