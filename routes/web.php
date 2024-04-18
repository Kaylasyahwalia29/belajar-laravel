<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// route basic
Route::get('/saya', function () {
    return '<h1>Hallo</h1>'
    .'Selamat datang di webapp saya<br>'
    .'Laravel, emang keren.';
});

// buat route basic introduce yourself
Route::get ('/aku', function () {
    return '<h1>Biodata</h1>'
    .'Nama : kayla Syahwalia<br>'
    .'TTL : Bandung, 29 Oktober 2006<br>'
    .'Jenis Kelamin : Perempuan<br>'
    .'Umur : 17 Tahun<br>'
    .'Sekolah : SMK assalaam Bandung<br>'
    .'Hobi : Main ajaa<br>';
    
});

// buat route basic to view
Route::get ('animals', function () {
    $king = "lion";
    $hewan = ["monkey", "dragonfly", "tiger", "butterfly", "crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get ('vegetables', function (){
    $fruit = ["apple", "grape", "starfruit", "melon"];
    return view('vegetables_page', ['buah' => $fruit]);
});


// route parameter  parameter di tandai dengan ()
Route::get ('product/{name}', function($name) {
    return "produk: $name";
});


// buat sebuah route dengan 3 buah parameter
// nama, berat badan, tinggi badan
Route::get('biodata/{nama}','{beratbadan}','{tinggibadan}', function ($name, $Beratbadan, $Tinggibadan) {
    return "nama: $name<br> beratbadan: $Beratbadan <br> tinggibadan: $Tinggibadan";
});


Route::get('myself/{name}/{bb}/{tb}', function $a, $bb, $tb) {
    $bmi = $bb / (($tb / 100) ** 2);
    if ($bmi > 30) {
        $ket = "Obsesitas";
    } elseif ($bmi > 25) {
        $ket = "Kelebihan";
    } elseif ($bmi > 18.5) {
        $ket = "ideal";
    } elseif ($bmi < 18.5) {
        $ket = "Kekurangan berat badan";
    }

    return "Nama: $a<br>".
        "Berat Badan = $bb <br> Tinggi Badan = $tb <br> Nilai bmi = $nilai <br> Keterangan = $ket";
};
