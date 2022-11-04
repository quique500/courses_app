<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /* relacion uno a muchos inversa */
    public function users(){
        return $this->belongsTo('App\Models\User');
    }


    /* metodo de la relacion polimórfica */
    public function commentable(){
        return $this-> morphTo(); /* indicar que se va a urilizar una relacion polimorfica  */

    }

    /* relacion uno a muchos polimorfica  */
    public function commnets(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    public function reactions(){
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }
}
