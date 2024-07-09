<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArmadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('armadas')->insert([
            [
                'merek' => 'P001',
                'nopol' => 'Budi Santoso',
                'thn_beli' => 'Jakarta',
                'deskripsi' => '1990-01-01',
                'kapasitas_kursi' => 'L',
                'rating' => 'budi@example.co.id',
                'jenis_id' => 'Jl. Merdeka No.1',
            ],
        ]);
    
    }
}
