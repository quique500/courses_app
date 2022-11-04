<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    /* REALACION UNO AMUCHOS */
    public function lessons(){
        return $this->hasMany('App\Models\Lesson');
    }
}
