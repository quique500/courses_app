<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $guarded= ['id'];     // dentro del array se declara en campo que se va a bloquear en la asignacion masiva

    use HasFactory;

    /* relacion uno amuchos inversa  */
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}
