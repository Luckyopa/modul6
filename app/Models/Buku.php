<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = [
        'perpustakaan_id',
        'judulBuku',
        'pengarangBuku',
        'penerbitBuku',
        'tahunTerbitBuku',
    ];
    public function perpustakaan()
{
    return $this->belongsTo(Perpustakaan::class);
}

}
