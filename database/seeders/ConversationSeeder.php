<?php

namespace Database\Seeders;

use App\Models\Conversation;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conversation::create([
            'name' => 'Coffee Shop Group',
            'uuid' => Str::uuid(),
            'user_id' => rand(1,5),
            'last_message_at' => Carbon::now()
        ]);
        Conversation::create([
            'name' => 'Fried Chicken Group',
            'uuid' => Str::uuid(),
            'user_id' => rand(1,5),
            'last_message_at' => Carbon::now()
        ]);
        Conversation::create([
            'name' => 'Dessert Group',
            'uuid' => Str::uuid(),
            'user_id' => rand(1,5),
            'last_message_at' => Carbon::now()
        ]);
    }
}
