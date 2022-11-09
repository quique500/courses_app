<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Course;
use App\Models\Level;
use App\Models\Price;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        /* generador de slug(es para cambiar los espacios vacios por guienes) para las url */
        $title= $this->faker->sentence();


        return [
            'title'=> $title,     //para asignar una sentencia de prueba
            'subtitle'=> $this->faker->sentence(),
            'description'=> $this->faker->paragraph(),
            'status'=>$this->faker->randomElement([Course::BORRADOR, Course::REVISION, Course::PUBLICADO]), //tomar una constante random del modelo course
            'slug'=>Str::slug($title),   //en le campo slug se le pasa el valor del slug "$title"
            'user_id'=>User::all()->random()->id,     //para rescatar todos los usuarios regitrados y eliga uno al azar
            'level_id'=>Level::all()->random()->id,
            'category_id'=>Category::all()->random()->id,
            'price_id'=>Price::all()->random()->id,
        ];
    }
}
