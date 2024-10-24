<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('admins')->insert([
            'id' => Str::uuid(),
            'name' => 'Admin MIS RSUD Bengkalis',
            'username' => 'admin-mis',
            'password' => Hash::make('password_mis'),
        ]);
    }
}
