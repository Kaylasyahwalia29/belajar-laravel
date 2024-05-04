<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('jumlah');
            $table->date('tanggal_produksi');
            $table->unsignedInteger('id_merk');
            
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Produks');
    }
};
