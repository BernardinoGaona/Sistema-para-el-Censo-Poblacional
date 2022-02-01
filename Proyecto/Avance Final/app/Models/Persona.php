<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at']; 

    //Relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sexo(){
        return $this->belongsTo(Sexo::class);
    }

    public function estadoc(){
        return $this->belongsTo(Estado_Civile::class);
    }

    public function niveli(){
        return $this->belongsTo(Nivel_Instruccione::class);
    }

    public function respuest(){
        return $this->belongsTo(Respuesta::class);
    }

    //Relacion unos a muchos

    public function caracteristica(){
        return $this->hasMany(CaractGrupo_f::class);
    }

    /* public function jefe(){
        return $this->hasMany(Jefe::class);
    } */

    //relacion muchos a muchos
    
    public function nucleo(){
        return $this->belongsToMany(Nucleo_f::class);
    }

    /* public function jefe(){
        return $this->belongsToMany(Jefe::class);
    } */

    //Relacion uno a uno polimorfica

    /* public function jefe(){
        return $this->morphOne(Jefe::class, 'persona_id');
    } */
}
