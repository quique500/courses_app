<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        /* retorne una coleccion de todos los cursos */
        /* le metodo "lates" sirve para ordenar los cursos por el mas nuevo primero */
        $courses=Course::where('status', 3)->latest('id')->get();   //mostrar cursos que an sido aprobados

        /* return Course::find(1)->rating;      (retorna las calificaciones de cada curso)*/

        return view('welcome', compact('courses'));
    }
}
