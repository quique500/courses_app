<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guarded= ['id'];     // dentro del array se declara en campo que se va a bloquear en la asignacion masiva

    /* relacion uno amuchos inversa */
    public function user(){
        return $this->belongsTo('App/Model/User');
    }

    public function course(){
        return $this->belongsTo('App/Model/Course');
    }
}
