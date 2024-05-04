<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'no_telepon', 'pengguna_id'];
    public $timestamps = true;

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'Pengguna_id');
    }
}
