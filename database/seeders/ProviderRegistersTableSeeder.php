<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Str;

class ProviderRegistersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurantNames = [
            'The Red Kitchen',
            'Green Garden Restaurant',
            'The Ocean Bistro',
            'Sunshine Cafe',
            'Purple Mountain Diner',
            'Latte Me Live',
            'Steamy Beans Coffee',
            'HuggaMug Cafe',
            'Dairy Goddess',
            'Swirl Station',
            'Backyard Bakery',
            'Apple Of My Pie',
            'PLNT Burger',
            'Clam Chop (fish and steak)',
            'City of Fish',
        ];

        $restaurantEmails = [
            'theredkitchen@email.com',
            'greengardenrestaurant@email.com',
            'theoceanbistro@email.com',
            'sunshinecafe@email.com',
            'purplemountaindiner@email.com',
            'latmelive@email.com',
            'steamybeanscoffee@email.com',
            'huggamugcafe@email.com',
            'dairygoddess@email.com',
            'swirlstation@email.com',
            'backyardbakery@email.com',
            'appleofmypie@email.com',
            'plntburger@email.com',
            'clamchop@email.com',
            'cityoffish@email.com',
        ];

        $restaurantUsername = [
            'the_red_kitchen',
            'greengarden_restaurant',
            'theocean.bistro',
            'sunshinecafe',
            'purplemountain_diner',
            'latmelive',
            'steamybeanscoffee',
            'huggamugcafe',
            'dairygoddess',
            'swirlstation',
            'backyardbakery',
            'appleofmypie',
            'plntburger',
            'clamchop',
            'cityoffish',
        ];

        $restaurantPhoneNumbers = [
            '0123456789',
            '9876543210',
            '2468013579',
            '1357902468',
            '1234567890',
            '1029384756',
            '6789054321',
            '9876543210',
            '1357902468',
            '2468013579',
            '1234567890',
            '1029384756',
            '6789054321',
            '9876543210',
            '1357902468',
            '2468013579',
            '1234567890',
            '1029384756',
            '6789054321',
            '9876543210'
        ];

        for ($i = 0; $i < 20; $i++) {
            DB::table('provider_registers')->insert([
                'id' => 9 + $i,
                'name' => $restaurantNames[$i],
                'email' => $restaurantEmails[$i],
                'password' => bcrypt('12345678'),
                'phone' => $restaurantPhoneNumbers[$i],
                'phone_activated' => 1,
                'user_name' => $restaurantEmails[$i],
                'ar_details' => Str::random(100),
                'en_details' => Str::random(100),
                'rest_img' => 'restaurant_' . ($i + 1) . '.jpg',
                'address' => Str::random(100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
