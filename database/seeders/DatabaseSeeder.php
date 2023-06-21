<?php

namespace Database\Seeders;

use App\Models\admin\Product;
use App\Models\Comment;
use Database\Seeders\delete\LaratrustSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
       //$this->call(CommentSeeder::class);
//        $this->call(PostSeeder::class);
        //$this->call(SettingSeeder::class);
        //$this->call(AdminSeeder::class);
//        $this->call(ConversationSeeder::class);
//        $this->call(ConversationUserSeeder::class);
//        $this->call(MessagesTableSeeder::class);
       // $this->call(AdminsSeeders::class);
        //$this->call(ProductSeeder::class);
//        $this->call(MainCategorySeeder::class);
//        $this->call(ProviderRegistersTableSeeder::class);
        //$this->call(CategorySeeder::class);
//        $this->call(RestCategorySeeder::class);
        $this->call(MealSeeder::class);


    }
}
