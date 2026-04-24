<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kategoria;

class KategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategoria::insert([
            ['kategorianev' => 'Sport'],
            ['kategorianev' => 'Hazimunka'],
        ]);
    }
}
