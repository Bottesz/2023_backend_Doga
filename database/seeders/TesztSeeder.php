<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\teszt;
class TesztSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teszt::insert([
            [
                'kerdes' => 'Hány ember játszik egy foci csapatban a pályán',
                'v1' => 11,
                'v2' => 12,
                'v3' => 10,
                'v4' => 16,
                'helyes' => 'v1',
                'kategoriaId' => 1,
            ],

            [
                'kerdes' => 'Hány ember játszik egy rugby csapatban a pályán?',
                'v1' => 11,
                'v2' => 12,
                'v3' => 10,
                'v4' => 16,
                'helyes' => 'v1',
                'kategoriaId' => 1,
            ],


            [
                'kerdes' => 'Melyik munka a legegyszerubb otthon?',
                'v1' => 'mosogsatás',
                'v2' => 'takarítás',
                'v3' => 'mosás',
                'v4' => 'porszivózás',
                'helyes' => 'v1',
                'kategoriaId' => 2,
            ],


            [
                'kerdes' => 'Melyik munka a legnehezebb otthon?',
                'v1' => 'mosogsatás',
                'v2' => 'takarítás',
                'v3' => 'mosás',
                'v4' => 'porszivózás',
                'helyes' => 'v1',
                'kategoriaId' => 2,
            ],
        ]);
    }
}
