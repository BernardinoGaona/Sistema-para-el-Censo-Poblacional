<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nucleo_f extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at']; 

    //Relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function jefe(){
        return $this->belongsTo(Jefe::class);
    }

    public function vivienda(){
        return $this->belongsTo(Vivienda::class);
    }

    //Relacion unos a muchos

    public function senso(){
        return $this->hasMany(Senso::class);
    }

    public function caracteristica(){
        return $this->hasMany(CaractGrupo_f::class);
    }

    public function servicio(){
        return $this->hasMany(Servicio::class);
    }

    public function situacion(){
        return $this->hasMany(SituacionVivienda::class);
    }

    //relacion muchos a muchos
    
    public function persona(){
        return $this->belongsToMany(Persona::class);
    }
}
