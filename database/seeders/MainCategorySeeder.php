<?php

namespace Database\Seeders;

use App\Models\admin\MainCategory;
use App\Models\providers\MealCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('main_categories')->delete();
        MainCategory::create([
            'id' => 1,
            'translation_lang '=> 'en',
            'translate_of '=> 0,
            'name'=> 'Dessert',
            'slug'=> 'dessert',
            'photo'=> 'images/maincategories/n6UyvIY9OsnHTmTsgOroNZPEoGe8v1LW4WvNMBDq.png',
            'active'=> 1,
        ]);
        MainCategory::create([
            'id' => 2,
            'translation_lang '=> 'ar',
            'translate_of '=> '1',
            'name'=> 'الحلاويات',
            'slug'=> 'dessert',
            'photo'=> 'images/maincategories/n6UyvIY9OsnHTmTsgOroNZPEoGe8v1LW4WvNMBDq.png',
            'active'=> 1,
        ]);
        MainCategory::create([
            'id' => 3,
            'translation_lang'=> 'en',
            'translate_of '=> 0,
            'name'=> 'Pizza',
            'slug'=> 'pizza',
            'photo'=> 'images/maincategories/EQwoOEN3aRzWpYDGvkf7ckehSKHr5HPHprXUZ4O5.jpg',
            'active'=> 1,
        ]);
        MainCategory::create([
            'id' => 4,
            'translation_lang'=> 'ar',
            'translate_of'=> 3,
            'name'=> 'بيتزا',
            'slug'=> 'pizza',
            'photo'=> 'images/maincategories/EQwoOEN3aRzWpYDGvkf7ckehSKHr5HPHprXUZ4O5.jpg',
            'active'=> '',
        ]);
        MainCategory::create([
            'id' => 5,
            'translation_lang '=> '',
            'translate_of '=> '',
            'name'=> '',
            'slug'=> '',
            'photo'=> 'images/maincategories/wGhxHCtDIlBqPwEeU20YRju5ucZ68qCYNL46MQug.jpg',
            'active'=> '',
        ]);

        MainCategory::create([
            'id' => 6,
            'translation_lang '=> '',
            'translate_of '=> '',
            'name'=> '',
            'slug'=> '',
            'photo'=> 'images/maincategories/wGhxHCtDIlBqPwEeU20YRju5ucZ68qCYNL46MQug.jpg',
            'active'=> '',
        ]);

        MainCategory::create([
            'id' => 5,
            'translation_lang '=> '',
            'translate_of '=> '',
            'name'=> '',
            'slug'=> '',
            'photo'=> 'images/maincategories/wGhxHCtDIlBqPwEeU20YRju5ucZ68qCYNL46MQug.jpg',
            'active'=> '',
        ]);
        MainCategory::create([
            'id' => 6,
            'translation_lang '=> '',
            'translate_of '=> '',
            'name'=> '',
            'slug'=> '',
            'photo'=> 'images/maincategories/wGhxHCtDIlBqPwEeU20YRju5ucZ68qCYNL46MQug.jpg',
            'active'=> '',
        ]);
    }
}
