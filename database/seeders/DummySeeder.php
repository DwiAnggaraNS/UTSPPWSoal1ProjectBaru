<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pemain;

use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) { 
            Pemain::create([
                'nama_pemain'=> fake()->name(),
                'no_punggung'=> fake()->numberBetween(1, 99),
                'posisi'=> fake()->shuffleArray(['Kiper', 'Penyerang','Bek', 'Gelandang']),
            ]);
        }   
    }
}
