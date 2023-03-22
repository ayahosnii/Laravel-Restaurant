<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class VegetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vegetables')->insert([
            ['name' => 'carrots'],
            ['name' => 'broccoli'],
            ['name' => 'zucchini'],
            ['name' => 'spinach'],
            ['name' => 'potatoes'],
        ]);
    }
}
