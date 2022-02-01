<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Null_;

class Jefe extends Model
{
    use HasFactory;
    
    protected $guarded = ['id', 'created_at', 'update_at'];

    //Relacion uno a muchos inversa

    /* public function persona(){
        return $this->belongsTo(Persona::class);
    } */

    //Relacion unos a muchos

    public function nulceo(){
        return $this->hasMany(Nucleo_f::class);
    }

    //Relacion muchos a muchos

    /* public function persona(){
        return $this->belongsToMany(Persona::class);
    } */

    /* //Relacion Polimorfica

    public function persona_id(){
        return $this->morphTo();
    } */
}
