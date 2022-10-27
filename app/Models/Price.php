<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    /* relacion uno a muchos */
    public function level(){
        return $this->hasMany('App/Models/Course');
    }
}
