<?php

namespace Database\Seeders;

use App\Models\Audience;
use App\Models\Course;
use App\Models\Description;
use App\Models\Goal;
use App\Models\Image;
use App\Models\Lesson;
use App\Models\Requirement;
use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Descriptor\Descriptor;

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

            Requirement::factory(1)->create([
                'course_id'=>$course->id
            ]);

            Goal::factory(1)->create([
                'course_id'=>$course->id
            ]);

            Audience::factory(1)->create([
                'course_id'=>$course->id
            ]);

            $sections= Section::factory(4)->create(['course_id'=>$course->id]);
            foreach ($sections as $section) {
                $lessons = Lesson::factory(1)->create(['section_id'=>$section->id]);

                foreach ($lessons as $lesson) {
                    Description::factory(1)->create(['lesson_id'=>$lesson->id]);    //genera una descripcion por cada leccion
                }
            }

        }
    }
}
