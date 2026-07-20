<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['id' => 1, 'name' => 'Fruits', 'icon' => 'icons/fruits.png'],
            ['id' => 2, 'name' => 'Vegetables', 'icon' => 'icons/vegetables.png'],
            ['id' => 3, 'name' => 'Spices', 'icon' => 'icons/spices.png'],
            ['id' => 4, 'name' => 'Honey', 'icon' => 'icons/honey.png'],
            ['id' => 5, 'name' => 'Grains', 'icon' => 'icons/grains.png'],
            ['id' => 6, 'name' => 'Nuts', 'icon' => 'icons/nuts.png'],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(['id' => $category['id']], $category);
        }
    }
}
