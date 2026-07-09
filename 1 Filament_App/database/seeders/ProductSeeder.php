<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Product::insert([
            [
                'name' => 'MacBook Pro M4',
                'description' => 'High-performance laptop for developers and creators.',
                'price' => 2499.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dell XPS 15',
                'description' => 'Premium Windows laptop with Intel Core Ultra processor.',
                'price' => 1899.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'iPhone 16 Pro',
                'description' => 'Flagship smartphone with advanced camera system.',
                'price' => 1199.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung Galaxy S25 Ultra',
                'description' => 'Android smartphone with AI-powered features.',
                'price' => 1299.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'iPad Air',
                'description' => 'Lightweight tablet for productivity and entertainment.',
                'price' => 699.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sony WH-1000XM5',
                'description' => 'Wireless noise-cancelling headphones.',
                'price' => 399.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Logitech MX Master 3S',
                'description' => 'Ergonomic wireless mouse for professionals.',
                'price' => 99.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Keychron K8',
                'description' => 'Mechanical wireless keyboard with RGB backlighting.',
                'price' => 89.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ASUS ROG Swift Monitor',
                'description' => '27-inch gaming monitor with 240Hz refresh rate.',
                'price' => 799.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Apple Watch Series 10',
                'description' => 'Smartwatch with health and fitness tracking.',
                'price' => 499.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
