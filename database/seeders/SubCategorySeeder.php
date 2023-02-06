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

    }
}
