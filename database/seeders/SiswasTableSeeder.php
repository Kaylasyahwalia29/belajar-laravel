<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['nama'=> 'Kayla', 'jenis_kelamin'=> 'perempuan', 'alamat'=> 'Kp Babakan Nugraha', 'agama'=> 'islam', 'telepon'=> 38951, 'email'=> 'kaylasyahwalia@gmail.com'],
            ['nama'=> 'Nashwa', 'jenis_kelamin'=> 'perempuan', 'alamat'=> 'tci', 'agama'=> 'islam', 'telepon'=> 18990, 'email'=> 'nashwa@gmail.com'],
            ['nama'=> 'zahira', 'jenis_kelamin'=> 'perempuan', 'alamat'=> 'cibaduyut', 'agama'=> 'islam', 'telepon'=> 28950, 'email'=> 'zahira@gmail.com'],
            ['nama'=> 'Silva', 'jenis_kelamin'=> 'perempuan', 'alamat'=> 'Kp animah', 'agama'=> 'islam', 'telepon'=> 18951, 'email'=> 'silva@gmail.com'],
            ['nama'=> 'Riska', 'jenis_kelamin'=> 'perempuan', 'alamat'=> 'situtarate', 'agama'=> 'islam', 'telepon'=> 38951, 'email'=> 'riska@gmail.com'],
            ['nama'=> 'Nazwa', 'jenis_kelamin'=> 'perempuan', 'alamat'=> 'tci', 'agama'=> 'islam', 'telepon'=> 48951, 'email'=> 'sindy@gmail.com'],
            ['nama'=> 'Sindy', 'jenis_kelamin'=> 'perempuan', 'alamat'=> 'bojong suren', 'agama'=> 'islam', 'telepon'=> 48951, 'email'=> 'nazwa@gmail.com'],
            ['nama'=> 'Felisa', 'jenis_kelamin'=> 'perempuan', 'alamat'=> 'cibogo', 'agama'=> 'islam', 'telepon'=> 58951, 'email'=> 'felisa@gmail.com'],
            ['nama'=> 'Aisa', 'jenis_kelamin'=> 'perempuan', 'alamat'=> 'rancamanyar', 'agama'=> 'islam', 'telepon'=> 68951, 'email'=> 'aisa@gmail.com'],
            ['nama'=> 'Siti', 'jenis_kelamin'=> 'perempuan', 'alamat'=> 'rancamanyar', 'agama'=> 'islam', 'telepon'=> 68951, 'email'=> 'siti@gmail.com']
        ];
        DB::table('siswas')->insert($siswas);
    }
}
