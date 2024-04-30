<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama'=> 'Baju', 'jumlah'=> 200],
            ['nama'=> 'Sepatu', 'jumlah'=> 150],
            ['nama'=> 'Tas', 'jumlah'=> 100]
        ];
        DB::table('barangs')->insert($barangs);

    }
}
