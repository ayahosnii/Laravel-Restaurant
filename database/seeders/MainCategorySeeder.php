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
            'translate_of'=> 0,
            'name'=> 'Dessert',
            'slug'=> 'dessert',
            'photo'=> 'images/maincategories/n6UyvIY9OsnHTmTsgOroNZPEoGe8v1LW4WvNMBDq.png',
            'active'=> 1,
        ]);
        MainCategory::create([
            'id' => 2,
            'translation_lang '=> 'ar',
            'translate_of'=> '1',
            'name'=> 'الحلاويات',
            'slug'=> 'dessert',
            'photo'=> 'images/maincategories/n6UyvIY9OsnHTmTsgOroNZPEoGe8v1LW4WvNMBDq.png',
            'active'=> 1,
        ]);
        MainCategory::create([
            'id' => 3,
            'translation_lang'=> 'en',
            'translate_of'=> 0,
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
            'translation_lang'=> 'en',
            'translate_of'=> 0,
            'name'=> 'Seafood',
            'slug'=> 'seafood',
            'photo'=> 'images/maincategories/seafood.jpg',
            'active'=> 1,
        ]);
        MainCategory::create([
            'id' => 6,
            'translation_lang'=> 'ar',
            'translate_of'=> 5,
            'name'=> 'أطعمة البحر',
            'slug'=> 'seafood',
            'photo'=> 'images/maincategories/seafood.jpg',
            'active'=> 1,
        ]);
        MainCategory::create([
            'id' => 7,
            'translation_lang'=> 'en',
            'translate_of'=> 0,
            'name'=> 'Steakhouse',
            'slug'=> 'steakhouse',
            'photo'=> 'images/maincategories/steakhouse.jpg',
            'active'=> 1,
        ]);
        MainCategory::create([
            'id' => 8,
            'translation_lang'=> 'ar',
            'translate_of'=> 7,
            'name'=> 'مطعم اللحوم',
            'slug'=> 'steakhouse',
            'photo'=> 'images/maincategories/steakhouse.jpg',
            'active'=> 1,
        ]);



        DB::table('main_categories')->delete();
        MainCategory::create([
            'id' => 9,
            'translation_lang '=> 'en',
            'translate_of'=> 0,
            'name'=> 'Cuisine',
            'slug'=> 'cuisine',
            'photo'=> 'images/maincategories/cuisine.jpg',
            'active'=> 1,
        ]);
        MainCategory::create([
            'id' => 10,
            'translation_lang '=> 'ar',
            'translate_of'=> '9',
            'name'=> 'المطبخ',
            'slug'=> 'cuisine',
            'photo'=> 'images/maincategories/cuisine.jpg',
            'active'=> 1,
        ]);
        MainCategory::create([
            'id' => 11,
            'translation_lang'=> 'en',
            'translate_of'=> 0,
            'name'=> 'Meal Type',
            'slug'=> 'meal-type',
            'photo'=> 'images/maincategories/meal-type.jpg',
            'active'=> 1,
        ]);
        MainCategory::create([
            'id' => 12,
            'translation_lang'=> 'ar',
            'translate_of'=> 11,
            'name'=> 'نوع الوجبة',
            'slug'=> 'meal-type',
            'photo'=> 'images/maincategories/meal-type.jpg',
            'active'=> '',
        ]);
        MainCategory::create([
            'id' => 13,
            'translation_lang'=> 'en',
            'translate_of'=> 0,
            'name'=> 'Dietary Restrictions',
            'slug'=> 'dietary-restrictions',
            'photo'=> 'images/maincategories/dietary-restrictions.jpg',
            'active'=> 1,
        ]);
        MainCategory::create([
            'id' => 14,
            'translation_lang'=> 'ar',
            'translate_of'=> 13,
            'name'=> 'قيود غذائية',
            'slug'=> 'dietary-restrictions',
            'photo'=> 'images/maincategories/dietary-restrictions.jpg',
            'active'=> 1,
        ]);

    }
}
