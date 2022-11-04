<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;

    protected $guarded= ['id'];     // dentro del array se declara en campo que se va a bloquear en la asignacion masiva


    /* realacion uno a uno inversa */
    public function lesson(){
        return $this->belongsTo('App\Models\Lesson');
    }
}
