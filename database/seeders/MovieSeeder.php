<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movie = new Movie();
        $movie->title = "One Piece GOLD";
        $movie->slug = Str::slug($movie->title);
        $movie->release = "2024/09/11";
        $movie->save();

        Movie::factory()->count(9)->create();
    }
}
