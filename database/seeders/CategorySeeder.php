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
            'name' => 'Breakfast',
            'slug' => 'breakfast',
        ]);
        CategoryBlog::create([
            'name' => 'Lunch',
            'slug' => 'lunch',
        ]);
        CategoryBlog::create([
            'name' => 'Dinner',
            'slug' => 'dinner',
        ]);
        CategoryBlog::create([
            'name' => 'Fast foods',
            'slug' => 'fast-foods',
        ]);

    }
}
