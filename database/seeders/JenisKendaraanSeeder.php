<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisKendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_kendaraans')->insert([
            ['nama' => 'SUV'],
            ['nama' => 'Sedan'],
            ['nama' => 'Truck'],
        ]);
    }
}
