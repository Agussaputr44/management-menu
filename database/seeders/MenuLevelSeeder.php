<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu_level')->insert([
            ['id_level' => '001', 'level' => 'Admin'],
            ['id_level' => '002', 'level' => 'User'],
            ['id_level' => '003', 'level' => 'Guest'],
        ]);
    }
}
