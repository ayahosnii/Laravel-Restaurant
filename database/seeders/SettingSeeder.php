<?php

namespace Database\Seeders;

use App\Models\CategoryBlog;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'id' => 1,
            'site_name' => 'Aya Restaurant',
            'contact_email' => 'aya_restaurant"site.com',
            'address' => '.....',
        ]);
    }
}
