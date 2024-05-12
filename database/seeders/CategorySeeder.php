<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(10)->create();
        $categories = [
            ['name' => 'Sit'],
            ['name' => 'Quam'],
            ['name' => 'Eum'],
            ['name' => 'Occaecati'],
            ['name' => 'Vitae'],
        ];
        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }
    }
}
