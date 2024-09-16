<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genre = new Genre();
        $genre->name = "Action";
        $genre->id = Str::upper(Str::slug($genre->name));
        $genre->save();

        $genre = new Genre();
        $genre->name = "Thriller";
        $genre->id = Str::upper(Str::slug($genre->name));
        $genre->save();

        $genre = new Genre();
        $genre->name = "Animation";
        $genre->id = Str::upper(Str::slug($genre->name));
        $genre->save();

        $genre = new Genre();
        $genre->name = "Drama Korea";
        $genre->id = Str::slug($genre->name);
        $genre->save();
    }
}
