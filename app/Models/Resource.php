<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $guarded= ['id'];     // dentro del array se declara en campo que se va a bloquear en la asignacion masiva

    /* metodo de la relacion polimórfica */
    public function resourceable(){
        return $this-> morphTo(); /* indicar que se va a urilizar una relacion polimorfica  */

    }
}
