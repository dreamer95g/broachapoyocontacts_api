<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nomenclators\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Mentoreo',
        ]);

        Category::create([
            'name' => 'Pastores en la Habana',
        ]);

        Category::create([
            'name' => 'Apoyador potencial',
        ]);

        Category::create([
            'name' => 'Apoyador retirado',
        ]);

        Category::create([
            'name' => 'Amigo',
        ]);
        Category::create([
            'name' => 'Pastor retirado',
        ]);
        Category::create([
            'name' => 'Mision transcultural',
        ]);
    }
}
