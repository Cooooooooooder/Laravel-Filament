<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $categoryIds = Category::pluck('id')->toArray();

        for ($i = 1; $i <= 20; $i++) {
            $title = "Post {$i}";

            Post::create([
                'category_id' => fake()->randomElement($categoryIds),
                'title' => $title,
                'slug' => Str::slug($title),
                'content' => fake()->paragraphs(3, true),
                'is_published' => fake()->boolean(),
            ]);
        }
    }
}
