<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    use HasFactory;
    protected $table = 'perpustakaan';
    public $timestamps = false;
    protected $fillable = [
        'namaPerpus',
        'alamatPerpus',
        'noTelpPerpus',
        'emailPerpus',
    ];
    public function buku()
    {
        return $this->hasMany(Buku::class);
    }
}
