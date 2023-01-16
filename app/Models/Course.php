<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JeroenNoten\LaravelAdminLte\View\Components\Form\Select;

class Course extends Model
{
    use HasFactory;

    protected $guarded= ['id', 'status'];     // dentro del array se declara en campo que se va a bloquear en la asignacion masiva
    protected $withCount= ['students', 'reviews'];     //variable que va acontar los almnos que estan matriculados a los cursos, y las calificaciones de los estuduantes


    /* SE DEFINEN LAS CONSTANTES PARA POSTERIORMENTE SER USADAS EN LA MIGRACION COURSES CON LO
    VALORES YA DEFINODOS */
    const BORRADOR=1;
    const REVISION=2;
    const PUBLICADO=3;

    public function getRatingAttribute(){

        /* condiocionnal para mostrar el promedio de las calificaciones y en caso de que no existan se agrega el valor por default 5 */
        if ( $this->reviews_count) {
            return round( $this->reviews->avg('rating'), 1);   //devuelve la coleccion del metodo "reviews" con las calificaciones y el promedio
        }else{
            return 5;
        }
    }

    /* (QUERY SCOPES) PARA HACER PERSONALIZADOS LOS FILTROS DE LOS CURSOS */
    public function scopeCategory($query, $category_id){
        if ($category_id) {     //si hay algo almacenado en la variable se realiza la consulta
            return $query->where('category_id', $category_id);
        }
    }

    public function scopeLevel($query, $level_id){
        if ($level_id) {
            return $query->where('level_id', $level_id);
        }
    }


    /* retornar el slug de cada curso en la url de los cursos */
    public function getRouteKeyName()
    {
        return 'slug';
    }


    /* relacion uno a muchos */
    public function reviews(){
        return $this->hasMany('App\Models\Review');
    }

    public function requirements(){
        return $this->hasMany('App\Models\Requirement');
    }

    public function goals(){
        return $this->hasMany('App\Models\Goal');
    }

    public function audiences(){
        return $this->hasMany('App\Models\Audience');
    }

    public function sections(){
        return $this->hasMany('App\Models\Section');
    }


    /* relacion uno a muchos con users */
    /* metodo para recuparar a los docentes */
    public function teacher(){
        return $this->belongsTo('App\Models\User');
    }

    public function level(){
        return $this->belongsTo('App\Models\Level');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function price(){
        return $this->belongsTo('App\Models\Level');
    }

    /* relacion muchos a muchos */
    /* metodo para recuperar a los estudiantes */
    public function students(){
        return $this->belongsToMany('App\Models\User');
    }

    /* relacion uno a uno polimorfica */
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }


    public function lessons(){
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }

}
