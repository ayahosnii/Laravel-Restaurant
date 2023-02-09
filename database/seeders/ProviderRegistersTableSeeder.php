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

        $restaurantEmails = [];
        $restaurantUsername = [];
        $restaurantPhoneNumbers = [];

        for ($i = 0; $i < count($restaurantNames); $i++) {
            $restaurantEmails[$i] = strtolower(str_replace(' ', '_', $restaurantNames[$i])) . '@email.com';
            $restaurantUsername[$i] = strtolower(str_replace(' ', '_', $restaurantNames[$i]));

            do {
                $restaurantPhoneNumbers[$i] = '0' . rand(11, 15) . rand(10000000, 99999999);
            } while (in_array($restaurantPhoneNumbers[$i], array_slice($restaurantPhoneNumbers, 0, $i)));

            DB::table('provider_registers')->insert([
                'name' => $restaurantNames[$i],
                'email' => $restaurantEmails[$i],
                'password' => bcrypt('12345678'),
                'phone' => $restaurantPhoneNumbers[$i],
                'user_name' => $restaurantUsername[$i],
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
