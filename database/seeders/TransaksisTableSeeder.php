<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            ['id_barang'=> 1, 'id_pembeli'=> 1, 'jumlah'=> 200, 'tanggal'=> '2006/04/12'],
            ['id_barang'=> 2, 'id_pembeli'=> 2, 'jumlah'=> 200, 'tanggal'=> '2006/04/12'],
            ['id_barang'=> 3, 'id_pembeli'=> 3, 'jumlah'=> 200, 'tanggal'=> '2006/04/12'],
            ['id_barang'=> 4, 'id_pembeli'=> 4, 'jumlah'=> 200, 'tanggal'=> '2006/04/12'],
            ['id_barang'=> 5, 'id_pembeli'=> 5, 'jumlah'=> 200,'tanggal'=> '2006/04/12'],
            ['id_barang'=> 6, 'id_pembeli'=> 6, 'jumlah'=> 200,'tanggal'=> '2006/04/12']
        ];
        DB::table('transaksis')->insert($transaksis);
    }
}
