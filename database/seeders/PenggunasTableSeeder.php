<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $penggunas = [
            ['nama'=> 'Kayla Syahwalia'],
            ['nama'=> 'Nashwa Kayla'],
            ['nama'=> 'Riska Setia Deswita']
        ];
        DB::table('penggunas')->insert($penggunas);

    }
}
