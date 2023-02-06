<?php

namespace Database\Seeders;

use App\Models\admin\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->delete();
        SubCategory::create([
            'id' => 1,
            'category_id' => 9,
            'parent_id' => 0,
            'translation_lang' => 'en',
            'translate_of' => 0,
            'name' => 'Italian',
            'slug' => 'italian',
            'photo' => 'images/subcategories/italian.jpg',
            'active' => 1,
        ]);
        SubCategory::create([
            'id' => 2,
            'category_id'=> 1,
            'translation_lang' => 'ar',
            'translate_of' => 1,
            'name' => 'إيطالي',
            'slug' => 'italian',
            'photo' => 'images/subcategories/italian.jpg',
            'active' => 1,
        ]);
        SubCategory::create([
            'id' => 3,
            'category_id' => 9,
            'parent_id' => 0,
            'translation_lang' => 'en',
            'translate_of' => 0,
            'name' => 'Mexican',
            'slug' => 'mexican',
            'photo' => 'images/subcategories/mexican.jpg',
            'active' => 1,
        ]);
        SubCategory::create([
            'id' => 4,
            'category_id' => 9,
            'parent_id' => 0,
            'translation_lang' => 'ar',
            'translate_of' => 3,
            'name' => 'مكسيكي',
            'slug' => 'mexican',
            'photo' => 'images/subcategories/mexican.jpg',
            'active' => 1,
        ]);
        SubCategory::create([
            'id' => 5,
            'category_id' => 9,
            'parent_id' => 0,
            'translation_lang' => 'en',
            'translate_of' => 0,
            'name' => 'Chinese',
            'slug' => 'chinese',
            'photo' => 'images/subcategories/chinese.jpg',
            'active' => 1,
        ]);
        SubCategory::create([
            'id' => 6,
            'category_id' => 9,
            'parent_id' => 0,
            'translation_lang' => 'ar',
            'translate_of' => 5,
            'name' => 'صيني',
            'slug' => 'chinese',
            'photo' => 'images/subcategories/chinese.jpg',
            'active' => 1,
        ]);
        SubCategory::create([
            'id' => 7,
            'category_id' => 9,
            'parent_id' => 0,
            'translation_lang' => 'en',
            'translate_of' => 0,
            'name' => 'Mexican',
            'slug' => 'mexican',
            'photo' => 'images/subcategories/mexican.jpg',
            'active' => 1,
        ]);
        SubCategory::create([
            'id' => 8,
            'category_id' => 9,
            'parent_id' => 0,
            'translation_lang' => 'ar',
            'translate_of' => 7,
            'name' => 'مكسيكي',
            'slug' => 'mexican',
            'photo' => 'images/subcategories/mexican.jpg',
            'active' => 1,
        ]);
        SubCategory::create([
            'id' => 9,
            'category_id' => 9,
            'parent_id' => 0,
            'translation_lang' => 'en',
            'translate_of' => 0,
            'name' => 'Japanese',
            'slug' => 'japanese',
            'photo' => 'images/subcategories/japanese.jpg',
            'active' => 1,
        ]);
        SubCategory::create([
            'id' => 10,
            'category_id' => 9,
            'parent_id' => 0,
            'translation_lang' => 'ar',
            'translate_of' => 9,
            'name' => 'ياباني',
            'slug' => 'japanese',
            'photo' => 'images/subcategories/japanese.jpg',
            'active' => 1,
        ]);
        SubCategory::create([
            'id' => 11,
            'category_id' => 11,
            'parent_id' => 0,
            'translation_lang' => 'en',
            'translate_of' => 0,
            'name' => 'Ice Cream',
            'slug' => 'ice-cream',
            'photo' => 'images/subcategories/ice-cream.jpg',
            'active' => 1,
        ]);
        SubCategory::create([
            'id' => 12,
            'category_id' => 11,
            'parent_id' => 0,
            'translation_lang' => 'ar',
            'translate_of' => 11,
            'name' => 'آيس كريم',
            'slug' => 'ice-cream',
            'photo' => 'images/subcategories/ice-cream.jpg',
            'active' => 1,
        ]);
        SubCategory::create([
            'id' => 13,
            'category_id' => 11,
            'parent_id' => 0,
            'translation_lang' => 'en',
            'translate_of' => 0,
            'name' => 'Cakes',
            'slug' => 'cakes',
            'photo' => 'images/subcategories/cakes.jpg',
            'active' => 1,
        ]);
        SubCategory::create([
            'id' => 14,
            'category_id' => 11,
            'parent_id' => 0,
            'translation_lang' => 'ar',
            'translate_of' => 13,
            'name' => 'كعك',
            'slug' => 'cakes',
            'photo' => 'images/subcategories/cakes.jpg',
            'active' => 1,
        ]);

        SubCategory::create([
            'id' => 15,
            'category_id' => 11,
            'parent_id' => 0,
            'translation_lang' => 'en',
            'translate_of' => 15,
            'name' => 'Pastries',
            'slug' => 'pastries',
            'photo' => 'images/subcategories/pastries.jpg',
            'active' => 1,
        ]);

        SubCategory::create([
            'id' => 16,
            'category_id' => 11,
            'parent_id' => 0,
            'translation_lang' => 'ar',
            'translate_of' => 15,
            'name' => 'حلويات',
            'slug' => 'pastries',
            'photo' => 'images/subcategories/pastries.jpg',
            'active' => 1,
        ]);

        SubCategory::create([
            'id' => 17,
            'category_id' => 11,
            'parent_id' => 0,
            'translation_lang' => 'en',
            'translate_of' => 17,
            'name' => 'Bread',
            'slug' => 'bread',
            'photo' => 'images/subcategories/bread.jpg',
            'active' => 1,
        ]);

        SubCategory::create([
            'id' => 18,
            'category_id' => 11,
            'parent_id' => 0,
            'translation_lang' => 'ar',
            'translate_of' => 17,
            'name' => 'خبز',
            'slug' => 'bread',
            'photo' => 'images/subcategories/bread.jpg',
            'active' => 1,
        ]);

        SubCategory::create([
            'id' => 19,
            'category_id' => 13,
            'parent_id' => 0,
            'translation_lang' => 'en',
            'translate_of' => 0,
            'name' => 'Gluten-Free',
            'slug' => 'gluten-free',
            'photo' => 'images/subcategories/gluten-free.jpg',
            'active' => 1,
        ]);

        SubCategory::create([
            'id' => 20,
            'category_id' => 13,
            'parent_id' => 0,
            'translation_lang' => 'ar',
            'translate_of' => 15,
            'name' => 'خالي من الغلوتين',
            'slug' => 'خالي-من-الغلوتين',
            'photo' => 'images/subcategories/gluten-free.jpg',
            'active' => 1,
        ]);

        SubCategory::create([
            'id' => 21,
            'category_id' => 13,
            'parent_id' => 0,
            'translation_lang' => 'en',
            'translate_of' => 0,
            'name' => 'Vegetarian',
            'slug' => 'vegetarian',
            'photo' => 'images/subcategories/vegetarian.jpg',
            'active' => 1,
        ]);

        SubCategory::create([
            'id' => 22,
            'category_id' => 13,
            'parent_id' => 0,
            'translation_lang' => 'ar',
            'translate_of' => 16,
            'name' => 'نباتي',
            'slug' => 'نباتي',
            'photo' => 'images/subcategories/vegetarian.jpg',
            'active' => 1,
        ]);

        SubCategory::create([
            'id' => 23,
            'category_id' => 13,
            'parent_id' => 0,
            'translation_lang' => 'en',
            'translate_of' => 0,
            'name' => 'Vegan',
            'slug' => 'vegan',
            'photo' => 'images/subcategories/vegan.jpg',
            'active' => 1,
        ]);

        SubCategory::create([
            'id' => 24,
            'category_id' => 13,
            'parent_id' => 0,
            'translation_lang' => 'ar',
            'translate_of' => 17,
            'name' => 'نباتي بدون ملح وجوز',
            'slug' => 'نباتي-بدون-ملح-وجوز',
            'photo' => 'images/subcategories/vegan.jpg',
            'active' => 1,
        ]);

        SubCategory::create([
            'id' => 25,
            'category_id' => 13,
            'parent_id' => 0,
            'translation_lang' => 'en',
            'translate_of' => 0,
            'name' => 'Low-Carb',
            'slug' => 'low-carb',
            'photo' => 'images/subcategories/low-carb.jpg',
            'active' => 1,
        ]);



        SubCategory::create([
            'id' => 26,
            'category_id' => 13,
            'parent_id' => 0,
            'translation_lang' => 'ar',
            'translate_of' => 18,
            'name' => 'قليل الكربوهيدرات',
            'slug' => 'قليل-الكربوهيدرات',
            'photo' => 'images/subcategories/low-carb.jpg',
            'active' => 1,
        ]);



    }
}
