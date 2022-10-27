<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /* SE DEFINEN LAS CONSTANTES PARA POSTERIORMENTE SER USADAS EN LA MIGRACION COURSES CON LO
    VALORES YA DEFINODOS */
    const BORRADOR=1;
    const REVISION=2;
    const PUBLICADO=3;


    /* relacion uno a muchos */
    public function reviews(){
        return $this->hasMany('App/Models/Review');
    }

    public function requirements(){
        return $this->hasMany('App/Models/Requirement');
    }


    /* relacion uno a muchos con users */
    /* metodo para recuparar a los docentes */
    public function teacher(){
        return $this->belongsTo('App/Models/User');
    }

    public function level(){
        return $this->belongsTo('App/Models/Level');
    }

    public function category(){
        return $this->belongsTo('App/Models/Level');
    }

    public function price(){
        return $this->belongsTo('App/Models/Level');
    }

    /* relacion muchos a muchos */
    /* metodo para recuperar a los estudiantes */
    public function students(){
        return $this->belongsToMany('App/Models/user', 'user_id');
    }
}
