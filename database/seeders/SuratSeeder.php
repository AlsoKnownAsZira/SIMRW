<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currenttimestamp = now();
        $data = [
            [ 'nama_persuratan' => 'Permintaan Surat Pengantar', 'path_persuratan' => 'path_surat', 'created_at' => $currenttimestamp, 'status' => 'Dalam Proses','NIK_warga'=>'1234567890123456'],

            
        ];
        DB::table('t_persuratan')->insert($data);
    }
}
