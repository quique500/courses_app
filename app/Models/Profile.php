<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded= ['id'];     // dentro del array se declara en campo que se va a bloquear en la asignacion masiva

    /* REALCION UNO A UNO DE  USER */
    public function user(){
        return $this->belongsTo('App/Models/User');
    }
}
