<?php

namespace Database\Seeders;

use App\Models\CategoryBlog;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Aya Restaurant',
            'email' => 'aya_restaurant@site.com',
            'password' => '12345678',
            'utype' => 'ADM',
        ]);
    }
}
