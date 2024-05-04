<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Barang;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostsTableSeeder::class);
        $this->call(BarangsTableSeeder::class);
        $this->call(SiswasTableSeeder::class);
        $this->call(PembelisTableSeeder::class);
        $this->call(Barangs2TableSeeder::class);
        $this->call(TransaksisTableSeeder::class);
        $this->call(MerksTableSeeder::class);
        $this->call(ProduksTableSeeder::class);
        $this->call(PenggunasTableSeeder::class);
        $this->call(TeleponsTableSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
