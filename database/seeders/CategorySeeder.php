<?php

namespace Database\Seeders;

use App\Models\CategoryBlog;
use DB;
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
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Beverages',
                'slug' => 'beverages',
                'is_active' => 1,
                'provider_id' => 22
            ],
            [
                'id' => 2,
                'name' => 'Pastries',
                'slug' => 'pastries',
                'is_active' => 1,
                'provider_id' => 22
            ],
            [
                'id' => 3,
                'name' => 'Desserts',
                'slug' => 'desserts',
                'is_active' => 1,
                'provider_id' => 24
            ],
            [
                'id' => 4,
                'name' => 'Ice Creams',
                'slug' => 'ice-creams',
                'is_active' => 1,
                'provider_id' => 24
            ],
            [
                'id' => 5,
                'name' => 'Milkshakes',
                'slug' => 'milkshakes',
                'is_active' => 1,
                'provider_id' => 24
            ]

        ]);

    }
}
