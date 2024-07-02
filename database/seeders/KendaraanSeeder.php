<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraans')->insert([
            [
                'nama' => 'Budi Santoso',
                'merek' => 'Brio',
                'nopol' => '8765',
                'thn_beli' => '2023-01-01',
                'deskripsi' => 'mobil baru beli',
                'jenis_kendaraan_id' => '',
                'kapasitas_kursi' => '8',
                'rating' => '4,5',
            ],
            [
                'nama' => 'Budi Santoso',
                'merek' => 'Brio',
                'nopol' => '8765',
                'thn_beli' => '2023-01-01',
                'deskripsi' => 'mobil baru beli',
                'jenis_kendaraan_id' => 'sedan',
                'kapasitas_kursi' => '8',
                'rating' => '4,5',
            ],
            [
                'nama' => 'Budi Santoso',
                'merek' => 'Brio',
                'nopol' => '8765',
                'thn_beli' => '2023-01-01',
                'deskripsi' => 'mobil baru beli',
                'jenis_kendaraan_id' => 'sedan',
                'kapasitas_kursi' => '8',
                'rating' => '4,5',
            ],
        ]);
    }
}
