<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'jaket',
            'description' => 'This is a sample product description.',
            'price' => 100,
            'stock' => 50,
        ]);
        Product::create([
            'name' => 'hoodie',
            'description' => 'This is a sample product description.',
            'price' => 100,
            'stock' => 50,
        ]);
    }
}
