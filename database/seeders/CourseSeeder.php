<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses= Course::factory(40)->create();  //genar registros de prueba

        /* una vez generado los datos de prueba se descargan las imagnes y se almacenan en la tabla Image  */
        foreach ($courses as $course) {
            Image::factory(1)->create([
                'imageable_id'=>$course->id,
                'imageable_type'=>'App/Models/Course'
            ]);
        }
    }
}
