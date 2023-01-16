<?php

namespace Database\Seeders;

use App\Models\providers\MealCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mcategory_meal')->delete();
        MealCategory::create([
            'meal_id '=>1,
            'mainCate_id '=>5,
            'category_id  '=>1,
        ]);
        MealCategory::create([
            'meal_id '=>2,
            'mainCate_id '=>5,
            'category_id  '=>1,
        ]);
    }
}
