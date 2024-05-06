<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currenttimestamp = now();
        $data = [
            [ 'Judul' => 'Pengaduan Sampah ', 'konten' => 'Sampah menumpuk di pertigaan, harap segera ditangani', 'created_at' => $currenttimestamp, 'status' => 'Dalam Proses','NIK_warga'=>'1234567890123456'],

            
        ];
        DB::table('t_data_aduan')->insert($data);
    }
}
