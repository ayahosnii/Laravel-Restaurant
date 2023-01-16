<?php

namespace Database\Seeders;

use App\Models\admin\Product;
use App\Models\admin\ProductTranslation;
use App\Models\Conversation;
use App\Models\providers\Meal;
use App\Models\providers\MealTranslation;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meals')->delete();
        Meal::create([
            'id' => 1,
            'name' =>'كيكة طبقات',
            'description' => 'Whether you’re celebrating a birthday, wedding, or just want to show off that beautiful new cake stand, sky-high stacks of cake and frosting are definitely needed.',
            'calories' => 500,
            'category_id' => NULL,
            'branch_id' => NULL,
            'price' => 95,
            'image' => 'images/products/chocolate-mousse-cake-1024x1536.jpg',
            'images' => NULL,
            'published' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'provider_id' => 2,
            'main_cate_id' => 5,
        ]);

        Meal::create([
            'id' => 2,
            'name' =>'مصاصات الكيك',
            'description' => 'How was your weekend? We spent most of it celebrating my friend’s birthday. I made a whole mess of treats including chocolate zucchini cake (as cupcakes), these salted caramel dark chocolate cookies, and these peanut butter M&M cookies too– it’s been way too long since I made a batch of those in particular! The birthday girl loves chocolate and peanut butter and caramel so these 3 were a no brainer.',
            'calories' => 440,
            'category_id' => NULL,
            'branch_id' => NULL,
            'price' => 85,
            'image' => 'images/products/homemade-cake-pops.jpg',
            'images' => NULL,
            'published' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'provider_id' => 2,
            'main_cate_id' => 5,
        ]);


        DB::table('meal_translations')->delete();
        MealTranslation::create([
            'id' => 1,
            'meal_id' => 1,
            'locale' => 'en',
            'name' => 'Layer Cakes',
            'description' => 'Whether you’re celebrating a birthday, wedding, or just want to show off that beautiful new cake stand, sky-high stacks of cake and frosting are definitely needed.',
        ]);

        MealTranslation::create([
            'id' => 2,
            'meal_id' => 2,
            'locale' => 'en',
            'name' => 'homemade-cake-pops',
            'description' => 'Whether you’re celebrating a birthday, wedding, or just want to show off that beautiful new cake stand, sky-high stacks of cake and frosting are definitely needed.',
        ]);

    }
}
