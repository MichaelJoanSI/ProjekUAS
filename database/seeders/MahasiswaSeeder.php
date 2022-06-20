<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 6; $i++) {
                 
        }
        DB::table('mahasiswa')->insert([
            'nim' => '72200445',
            'nama' => 'Budi',
            'gender' => '1',
            'jurusan' => 'Manajemen',
            'bidang_minat' => 'Bermain Game'
        ]);  

    }
}
