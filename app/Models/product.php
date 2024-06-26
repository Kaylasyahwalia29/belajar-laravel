<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name_product', 'price', 'descriptiion', 'id_brand'];
    public $timestamps = true;


public function brand()
{
    return $this->BelongsTo(Brand::class, 'id_brand');

}

// menghapus iamge
public function deleteImage(){
    if($this->cover && file_exists(public_path('images/product' . $this->cover))){
        return unlink(public_path('images/product' . $this->cover));
    }
}
}
