<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* crear los campos estaticos de los niveles */
        Level::create([
            'name'=>'Nivel básico'
        ]);

        Level::create([
            'name'=>'Nivel intermedio'
        ]);

        Level::create([
            'name'=>'Nivel avanzado'
        ]);
    }
}
