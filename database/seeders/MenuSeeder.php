<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu')->insert([
            [
                'menu_id' => '001',
                'id_level' => '001',
                'menu_name' => 'Dashboard',
                'menu_link' => '/dashboard',
                'menu_icon' => 'fas fa-tachometer-alt',
                'parent_id' => '0',
                'create_by' => 'admin',
                'create_date' => Carbon::now(),
                'delete_mark' => '0',
                'update_by' => 'admin',
                'update_date' => Carbon::now(),
            ],
            [
                'menu_id' => '002',
                'id_level' => '001',
                'menu_name' => 'Tambah Pengguna',
                'menu_link' => '/adduser',
                'menu_icon' => 'fas fa-user-plus',
                'parent_id' => '0',
                'create_by' => 'admin',
                'create_date' => Carbon::now(),
                'delete_mark' => '0',
                'update_by' => 'admin',
                'update_date' => Carbon::now(),
            ],
        ]);
    }
}
