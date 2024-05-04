<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barangs2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs2 = [
            ['nama_barang'=> 'Laptop', 'harga'=> 100000, 'stok'=> '20'],
            ['nama_barang'=> 'Handphone', 'harga'=> 250000, 'stok'=> '21'],
            ['nama_barang'=> 'Radio', 'harga'=> 300000, 'stok'=> '22']
        ];
        DB::table('barangs2')->insert($barangs2);

    
        
    }
}
