<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currenttimestamp = now();
        $data = [
            [ 'nomor_RT' => '1', 'Alamat' => 'JL Bunga Vinolia No 12', 'created_at' => $currenttimestamp, 'id_RW' => '1','NIK_RT'=>'12341234'],


        ];
        DB::table('t_rukun_tetangga')->insert($data);
    }
}
