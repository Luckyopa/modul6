<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perpustakaan;
use App\Models\Buku;

class PerpustakaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Perpustakaan::factory()
        ->has(Buku::factory()->count(5))
        ->count(5)
        ->create();
}   
}
