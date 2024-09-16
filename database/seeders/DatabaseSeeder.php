<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([MovieSeeder::class, GenreSeeder::class]);

        $movie = Movie::find(1);
        $movie->genres()->sync('Animation');

        $movie = Movie::find(2);
        $movie->genres()->sync(['Animation', 'Action']);
    }
}
