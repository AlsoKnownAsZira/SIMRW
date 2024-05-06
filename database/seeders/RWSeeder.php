<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RWSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currenttimestamp = now();
        $data = [
            [ 'nomor_RW' => '5', 'Alamat' => 'JL Bunga Vinolia', 'created_at' => $currenttimestamp, 'NIK_RW'=>'123123'],

            
        ];
        DB::table('t_rukun_warga')->insert($data);
    }
}
