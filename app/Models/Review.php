<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /* relacion uno amuchos inversa */
    public function user(){
        return $this->belongsTo('App/Model/User');
    }

    public function course(){
        return $this->belongsTo('App/Model/Course');
    }
}
