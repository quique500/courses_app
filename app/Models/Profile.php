<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /* REALCION UNO A UNO DE FORMA INVERSA CON LA MIGRACION USER */
    public function user(){
        return $this->belongsTo('App/Models/User');
    }
}
