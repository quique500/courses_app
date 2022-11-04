<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    use HasFactory;

    /* la propiedad '$guarded' sirve para bloquearlos campos en la en la asignacion masiva de datos */
    protected $guarded= ['id'];     // dentro del array se declara en campo que se va a bloquear en la asignacion masiva

    /* relacion uno a muchos inversa */
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}
