<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
    public function run(): void
    {
        Post::all()->each(function ($post) {

            $post->tags()->attach(
                fake()->randomElements([1,2,3,4,5,6,7], rand(1,3))
            );

        });
    }
}
