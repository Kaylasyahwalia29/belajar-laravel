<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk'=> 'blabla', 'jumlah'=> 200, 'tanggal_produksi'=> '1945/02/10', 'id_merk'=> 1 ],
            ['nama_produk'=> 'blabla', 'jumlah'=> 200, 'tanggal_produksi'=> '1945/02/10', 'id_merk'=> 2],
            ['nama_produk'=> 'blabla', 'jumlah'=> 200, 'tanggal_produksi'=> '1945/02/10', 'id_merk'=> 3],
            ['nama_produk'=> 'blabla', 'jumlah'=> 200, 'tanggal_produksi'=> '1945/02/10', 'id_merk'=> 4],
            ['nama_produk'=> 'blabla', 'jumlah'=> 200, 'tanggal_produksi'=> '1945/02/10', 'id_merk'=> 5],
            ['nama_produk'=> 'blabla', 'jumlah'=> 200, 'tanggal_produksik'=> '1945/02/10', 'id_merk'=> 6]
        ];
        DB::table('produks')->insert($produks);
    }
}
