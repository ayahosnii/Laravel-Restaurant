<?php

namespace Database\Seeders;

use App\Models\providers\Category;
use App\Models\providers\CategoryTranslation;
use App\Models\providers\MealCategory;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        Category::create([
            'id' => 1,
            'parent_id'=>NULL,
            'name' => 'Cake',
            'slug' => 'cake',
            'is_active' => 1,
            'created_at'=>Carbon::now(),
            'images'=>"",
            'provider_id'=>2,
        ]);
        Category::create([
            'id' => 2,
            'parent_id'=>NULL,
            'name' => 'Bread',
            'slug' => 'bread',
            'is_active' => 1,
            'created_at'=>Carbon::now(),
            'images'=>"",
            'provider_id'=>2,
        ]);
        Category::create([
            'id' => 3,
            'parent_id'=>NULL,
            'name' => 'Drinks',
            'slug' => 'drinks',
            'is_active' => 1,
            'created_at'=>Carbon::now(),
            'images'=>"",
            'provider_id'=>3,
        ]);
        Category::create([
            'id' => 4,
            'parent_id'=>NULL,
            'name' => 'Burger',
            'slug' => 'burger',
            'is_active' => 1,
            'created_at'=>Carbon::now(),
            'images'=>"",
            'provider_id'=>3,
        ]);
        Category::create([
            'id' => 5,
            'parent_id'=>NULL,
            'name' => 'Pasta',
            'slug' => 'pasta',
            'is_active' => 1,
            'created_at'=>Carbon::now(),
            'images'=>"",
            'provider_id'=>3,
        ]);

        Category::create([
            'id' => 6,
            'parent_id'=>1,
            'name' => 'Bundt, Loaf, & Pound Cakes',
            'slug' => 'bundt-loaf-pound-cakes',
            'is_active' => 1,
            'created_at'=>Carbon::now(),
            'images'=>"",
            'provider_id'=>2,
        ]);
        Category::create([
            'id' => 7,
            'parent_id'=>1,
            'name' => 'Layer Cakes',
            'slug' => 'layer-cakes',
            'is_active' => 1,
            'created_at'=>Carbon::now(),
            'images'=>"",
            'provider_id'=>2,
        ]);

        Category::create([
            'id' => 8,
            'parent_id'=>2,
            'name' => 'Quick Bread',
            'slug' => 'quick-bread',
            'is_active' => 1,
            'created_at'=>Carbon::now(),
            'images'=>"",
            'provider_id'=>2,
        ]);

        Category::create([
            'id' => 9,
            'parent_id'=>3,
            'name' => 'Coffee',
            'slug' => 'coffee',
            'is_active' => 1,
            'created_at'=>Carbon::now(),
            'images'=>"",
            'provider_id'=>3,
        ]);
        Category::create([
            'id' => 10,
            'parent_id'=>NULL,
            'name' => 'Juice',
            'slug' => 'juice',
            'is_active' => 1,
            'created_at'=>Carbon::now(),
            'images'=>"",
            'provider_id'=>3,
        ]);



        DB::table('category_translations')->delete();
        CategoryTranslation::create([
            'id' => 1,
            'category_id' => 1,
            'name' => 'كيك',
            'locale' => 'ar',
            'description' => 'description',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        CategoryTranslation::create([
            'id' => 2,
            'category_id'=>2,
            'name' => 'خبز',
            'locale' => 'ar',
            'description' => 'description',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        CategoryTranslation::create([
            'id' => 3,
            'category_id'=> 3,
            'name' => 'المشروبات',
            'locale' => 'ar',
            'description' => 'description',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        CategoryTranslation::create([
            'id' => 4,
            'category_id'=> 4,
            'name' => 'برجر',
            'locale' => 'ar',
            'description' => 'description',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        CategoryTranslation::create([
            'id' => 5,
            'category_id'=>5,
            'name' => 'مكرونة',
            'locale' => 'ar',
            'description' => 'description',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        CategoryTranslation::create([
            'id' => 6,
            'category_id'=>6,
            'name' => 'كيك بوندت وعيش وكيك الباوند',
            'locale' => 'ar',
            'description' => 'description',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        CategoryTranslation::create([
            'id' => 7,
            'category_id'=>7,
            'name' => 'كيك طبقات',
            'locale' => 'ar',
            'description' => 'description',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        CategoryTranslation::create([
            'id' => 8,
            'category_id'=>8,
            'name' => 'خبز سريع',
            'locale' => 'ar',
            'description' => 'description',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        CategoryTranslation::create([
            'id' => 9,
            'category_id'=>9,
            'name' => 'قهوة',
            'locale' => 'ar',
            'description' => 'description',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        CategoryTranslation::create([
            'id' => 10,
            'category_id'=>10,
            'name' => 'عصير',
            'locale' => 'ar',
            'description' => 'description',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
