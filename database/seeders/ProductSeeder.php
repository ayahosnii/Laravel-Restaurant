<?php

namespace Database\Seeders;

use App\Models\admin\Product;
use App\Models\admin\ProductTranslation;
use App\Models\Conversation;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        ProductTranslation::create([
            'id' => 1,
            'name' =>'بيتزا',
            'slug' => 'بيتزا',
            'description' => 'بيتزا شهية',
            'regular_price' => 100,
            'sale_price' => 95,
            'stock_status' => 5,
            'featured' => 0,
            'quantity' => NULL,
            'image' => 'images/products/jZMSpJsWfJyuiV6w9rklXhqx4e7HUVVC7rKArMjZ.jpg',
            'images' => NULL,
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'translation_lang' => 'ar',
            'active' => 1,
            'translation_of' => 5,
            'subcategory_id' => 5,
        ]);


        DB::table('product_translations')->delete();
        ProductTranslation::create([
            'id' => 1,
            'product_id' => 29,
            'locale' => 'en',
            'name' => 'Coffee',
            'description' => 'Delicious Coffee',
            'category_id' => 5
        ]);
        ProductTranslation::create([
            'id' => 2,
            'product_id' => 31,
            'locale' => 'en',
            'name' => 'Cake',
            'description' => 'Delicious Cake',
            'category_id' => 1

        ]);
        ProductTranslation::create([
            'id' => 3,
            'product_id' => 1,
            'locale' => 'en',
            'name' => 'Pizza',
            'description' => 'Delicious Pizza',
            'category_id' => 3

        ]);
        ProductTranslation::create([
            'id' => 4,
            'product_id' => 33,
            'locale' => 'en',
            'name' => 'Pizza With Vegetables',
            'description' => 'Delicious Pizza With Vegetables',
            'category_id' => 3

        ]);
    }
}
