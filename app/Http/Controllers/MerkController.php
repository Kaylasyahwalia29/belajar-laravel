<?php

namespace App\Http\Controllers;
use App\Models\merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    public function menampilkan(){
    $merk = Merk::all();
    return view('merek/index', compact('merk'));
    }

    public function show($id){
         $merk = Merk::findOrFail($id);
         return view('merek/show', compact('merk'));
    }

}
