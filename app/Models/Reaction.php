<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;

    protected $guarded= ['id'];     // dentro del array se declara en campo que se va a bloquear en la asignacion masiva

    const LIKE=1;
    const DISLIKE=2;


    /* relacion uno a muchos inversa */
    public function users(){
        return $this->belongsTo('App\Models\User');
    }




    /* metodo de la relacion polimórfica */
    public function reactionable(){
        return $this-> morphTo(); /* indicar que se va a urilizar una relacion polimorfica  */

    }
}
