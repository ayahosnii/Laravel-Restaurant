<?php

namespace Database\Seeders;

use App\Models\CategoryBlog;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        CategoryBlog::create([
            'id' => 1,
            'name' => 'Breakfast',
            'slug' => 'breakfast',
        ]);
        CategoryBlog::create([
            'id' => 2,
            'name' => 'Lunch',
            'slug' => 'lunch',
        ]);
        CategoryBlog::create([
            'id' => 3,
            'name' => 'Dinner',
            'slug' => 'dinner',
        ]);
        CategoryBlog::create([
            'id' => 4,
            'name' => 'Fast foods',
            'slug' => 'fast-foods',
        ]);

    }
}
