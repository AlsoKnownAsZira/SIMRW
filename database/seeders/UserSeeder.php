<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currenttimestamp = now();
        $data = [
            [
                'NIK' => '1234567890123456',
                'KK' => '1234567890123456',
                'username' => 'pengguna123',
                'password' => Hash::make('pengguna123'),
                'nama_depan' => 'NamaDepan',
                'nama_belakang' => 'NamaBelakang',
                'tempat_lahir' => 'TempatLahir',
                'tanggal_lahir' => '2000-01-01',
                'agama' => 'Islam',
                'status_perkawinan' => 'Belum Kawin',
                'status_hubungan' => 'Kepala Keluarga',
                'pekerjaan' => 'Pekerjaan',
                'tipe_warga' => 'Domisili Lokal',
                'role' => 'Warga',
                'jenis_kelamin' => 'Laki-laki',
                'golongan_darah' => 'A',
                'alamat' => 'Alamat Pengguna',
                'created_at' => $currenttimestamp,
            ],
            [
                'NIK' => '123123',
                'KK' => '123123',
                'username' => 'PAKRW',
                'password' => Hash::make('12341234'),
                'nama_depan' => 'NamaDepan',
                'nama_belakang' => 'NamaBelakang',
                'tempat_lahir' => 'TempatLahir',
                'tanggal_lahir' => '2000-01-01',
                'agama' => 'Islam',
                'status_perkawinan' => 'Belum Kawin',
                'status_hubungan' => 'Kepala Keluarga',
                'pekerjaan' => 'Pekerjaan',
                'tipe_warga' => 'Domisili Lokal',
                'role' => 'RW',
                'jenis_kelamin' => 'Laki-laki',
                'golongan_darah' => 'A',
                'alamat' => 'Alamat Pengguna',
                'created_at' => $currenttimestamp,
            ],
            [
                'NIK' => '12341234',
                'KK' => '12341234',
                'username' => 'PAKRT',
                'password' => Hash::make('12341234'),
                'nama_depan' => 'NamaDepan',
                'nama_belakang' => 'NamaBelakang',
                'tempat_lahir' => 'TempatLahir',
                'tanggal_lahir' => '2000-01-01',
                'agama' => 'Islam',
                'status_perkawinan' => 'Belum Kawin',
                'status_hubungan' => 'Kepala Keluarga',
                'pekerjaan' => 'Pekerjaan',
                'tipe_warga' => 'Domisili Lokal',
                'role' => 'RT',
                'jenis_kelamin' => 'Laki-laki',
                'golongan_darah' => 'A',
                'alamat' => 'Alamat Pengguna',
                'created_at' => $currenttimestamp,
            ],
        ];

        DB::table('t_users')->insert($data);
    }
}
