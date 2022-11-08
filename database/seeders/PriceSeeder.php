<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Price::create([
            'name'=>'Gratis',
            'value'=>0
        ]);

        Price::create([
            'name'=>'99.99 MX$ (Nivel 1)',
            'value'=>99.99
        ]);

        Price::create([
            'name'=>'129.99 MX$ (Nivel 2)',
            'value'=>129.99
        ]);

        Price::create([
            'name'=>'159.99 MX$ (Nivel 3)',
            'value'=>159.99
        ]);
    }
}
