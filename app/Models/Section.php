<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $guarded= ['id'];     // dentro del array se declara en campo que se va a bloquear en la asignacion masiva

    /* relacion uno amuchos */
    public function lessons(){
        return $this->hasMany('App/Models/Lesson');
    }


    /* relacion uno a muchos inversa */
    public function course(){
        return $this->belongsTo('App/Models/Course');
    }
}
