<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $pembelis = [
            ['nama_pembeli'=> 'Riska Setia Deswita', 'jenis_kelamin'=> 'perempuan'],
            ['nama_pembeli'=> 'Nashwa Kayla', 'jenis_kelamin'=> 'perempuan'],
            ['nama_pembeli'=> 'Silva Nur Fathihah', 'jenis_kelamin'=> 'perempuan']
        ];
        DB::table('pembelis')->insert($pembelis);
    }
}
