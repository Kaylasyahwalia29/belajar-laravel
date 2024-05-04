<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $merks = [
            ['nama_merk'=> 'Lenovo',],
            ['nama_merk'=> 'Samsung',],
            ['nama_merk'=> 'Vivo',]
        ];
        DB::table('merks')->insert($merks);
    }
}
