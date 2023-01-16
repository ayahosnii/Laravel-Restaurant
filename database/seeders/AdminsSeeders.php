<?php

namespace Database\Seeders;

use App\Models\admin\Admin;
use Illuminate\Database\Seeder;

class AdminsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin -> name = "Aya Hosny";
        $admin -> email = "aya@gmail.com";
        $admin -> password = bcrypt("12345678");
        $admin -> save();
    }
}
