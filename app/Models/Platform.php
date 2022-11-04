<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $guarded= ['id'];     // dentro del array se declara en campo que se va a bloquear en la asignacion masiva

    /* REALACION UNO AMUCHOS */
    public function lessons(){
        return $this->hasMany('App\Models\Lesson');
    }
}
