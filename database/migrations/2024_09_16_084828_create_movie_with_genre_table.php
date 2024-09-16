<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * tahapan migration 
     * 1. php artisan make:migration create_category_video_table --create=category_video
     * 2. php artisan migrate:fresh
     * 3. php artisan migrate:rollback --step=1
     * 4. php artisan migrate
     * 5. php artisan db:seed
     */
    public function up(): void
    {
        Schema::create('movie_with_genre', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('movie_id');
            $table->string('genre_id', 100);
            $table->foreign('movie_id')->references('id')
                ->on('movies')->onDelete('cascade');
            $table->foreign('genre_id')->references('id')
                ->on('genres')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_with_genre');
    }
};
