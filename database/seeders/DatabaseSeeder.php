<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        /* crear carpetas en directorios espesificos */
        Storage::deleteDirectory('cursos');
        Storage::makeDirectory('cursos');   //crear carpeta en storage una vez ejecutados los seeders



        /* llamar a los seeders dentro de databaseseeder */
        $this->call(UserSeeder::class);     //llamar al UserSeeder
        $this->call(LevelSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(PlatformSeeder::class);
        $this->call(CourseSeeder::class);

    }
}
