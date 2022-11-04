<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $guarded= ['id'];     // dentro del array se declara en campo que se va a bloquear en la asignacion masiva

    /* relacion uno a muchos */
    public function level(){
        return $this->hasMany('App/Models/Course');
    }
}
