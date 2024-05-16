<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Barang;
use App\Models\Siswa;
use App\Models\Pembeli;
use App\Models\Barang2;
use App\Models\Transaksi;
use App\Models\Merk;
use App\Models\Produk;
use App\Models\Pengguna;
use App\Models\Telepon;
use App\http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MerkController;
use Illuminate\Support\Facades\App\Http\Controller\HomeController;;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;



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
// Route::get ('product/{name}', function($name) {
//     return "produk: $name";
// });


// buat sebuah route dengan 3 buah parameter
// nama, berat badan, tinggi badan
Route::get('biodata/{nama}/{beratbadan}/{tinggibadan}', function ($name, $Beratbadan, $Tinggibadan) {
    return "nama: $name<br> beratbadan: $Beratbadan <br> tinggibadan: $Tinggibadan";
});


Route::get('myself/{name}/{bb}/{tb}', function ($a, $bb, $tb) {
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

    return "Nama: $a<br> Berat Badan = $bb <br> Tinggi Badan = $tb <br> Nilai bmi = $bmi <br> Keterangan = $ket";
});

// route optional parameter -> ditandai dengan ?
Route::get('myname/{name}', function($a = "abdu"){
    return "my name is $a";
});

// menampilkan database
route::get('/testmodel', function (){
    $post = Post::all();
     return view('tampil_post', compact('post'));
    return $post;
});


route::get('/barang', function (){
    $barang = Barang::all();
    return view('tampil_barang', compact('barang'));
    return $barang;
});


route::get('/siswa', function (){
    $siswa = Siswa::all();
    return view('tampil_siswa', compact('siswa'));

    //siswa = Siswa::find(3);
    // $data = Siswa::where('alamat', 'like', 'tci%')->get();

    
    // $data = new Siswa();
    // $data -> nama = "dinda";
    // $data -> jenis_kelamin = "perempuan";
    // $data -> alamat = "Kp Cipasung";
    // $data -> agama = "islam";
    // $data -> telepon = "13452";
    // $data -> email = "dinda@gamil.com";

    // $data->save();

    return $siswa;
});


route::get('/pembeli', function (){
    $pembeli = Pembeli::all();
    return view('tampil_pembeli', compact('pembeli'));
    return $pembeli;
});


route::get('/barang2', function (){
    $barang2 = Barang2::all();
    return view('tampil_barang2', compact('barang2'));
    return $barang2;
});

route::get('/transaksi', function (){
    $transaksi = Transaksi::all();
    return view('tampil_transaksi', compact('transaksi'));
    return $transaksi;
});

// route::get('/merk', function (){
//     $merk = Merk::all();
//     return view('tampil_merk', compact('merk'));
//     return $merk;
// });

route::get('/produk', function (){
    $produk = Produk::all();
    return view('tampil_produk', compact('produk'));
    return $produk;
});

route::get('/pengguna', function (){
    $pengguna = Pengguna::all();
    return view('tampil_pengguna', compact('pengguna'));
    return $pengguna;
});

route::get('/telepon', function (){
    $telepon = Telepon::all();
    return view('tampil_telepon', compact('telepon'));
    return $telepon;
});



// controller
route::get('posts', [PostController::class,'menampilkan'] );
route::get('posts/{id}', [PostController::class,'show'] );


route::get('/produk', [ProdukController::class, 'menampilkan']);
route::get('/produk/{id}', [ProdukController::class, 'show']);


route::get('/merk', [MerkController::class, 'menampilkan']);
route::get('/merk/{id}', [MerkController::class, 'show']);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// CRUD brand
Route::resource('brand', BrandController::class);
Route::resource('product', ProductController::class);



