<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ConversationUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conversation_user')->insert(['conversation_id' => 1, 'user_id' => 1, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 1, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 1, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 1, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 3, 'user_id' => 1, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 3, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 3, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 4, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 4, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 4, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 5, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 5, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now(),]);

    }
}
