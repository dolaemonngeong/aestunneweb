<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Hair Care'
        ]);
        
        Category::factory()->create([
           'name' => 'Make-up'
        ]);

        Category::factory()->create([
           'name' => 'Body Care'
        ]);

        Category::factory()->create([
           'name' => 'Skin Care'
        ]);
    }
}
