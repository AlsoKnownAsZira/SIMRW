<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ChangePassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_users')
            ->where('username', 'PAKRW')
            ->update(['password' => Hash::make('12341234')]);

        DB::table('t_users')
            ->where('username', 'PAKRT')
            ->update(['password' => Hash::make('12341234')]);
    }
}