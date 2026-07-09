<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'إلكترونيات',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ملابس',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'أحذية',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'كتب',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'رياضة',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
