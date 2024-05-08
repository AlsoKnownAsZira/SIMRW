<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class IuranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currenttimestamp = now();
        $data = [
            [ 'nominal' => 'Rp 25.000 ', 'tanggal_masuk' => '2024-01-01', 'created_at' => $currenttimestamp, 'id_RT'=>'2'],


        ];
        DB::table('t_iuran')->insert($data);
    }
}
