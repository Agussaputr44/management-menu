<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'id_user' => '1', // Atur sesuai dengan kebutuhan Anda
            'nama_user' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('12345678'), // Enkripsi password
            'email' => 'agusptr44@gmail.com',
            'no_hp' => '08123456789', // Ganti sesuai dengan kebutuhan
            'wa' => '08123456789', // Ganti sesuai dengan kebutuhan
            'pin' => '1234', // Ganti sesuai dengan kebutuhan
            'id_jenis_user' => '001', // Ganti sesuai dengan kebutuhan
            'status_user' => 'active', // Ganti sesuai dengan kebutuhan
            'delete_mark' => '0',
            'create_by' => 'Seeder',
            'create_date' => now(),
            'update_by' => 'Seeder',
            'update_date' => now(),
        ]);
    }
}

