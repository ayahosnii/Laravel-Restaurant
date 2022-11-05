<?php

namespace Database\Seeders;

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
        /*$this->call(CategorySeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(AdminSeeder::class);*/
        $this->call(ConversationSeeder::class);
        $this->call(ConversationUserSeeder::class);
        $this->call(MessagesTableSeeder::class);
    }
}
