<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vivienda extends Model
{
    //use HasFactory;

    protected $fillable = ['nro_identificacion', 'direccion', 'slug', 'user_id'];
    

    //Relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }


    //Relacion unos a muchos

    public function nucleo(){
        return $this->hasMany(Nucleo_f::class);
    }

    public function situacion(){
        return $this->hasMany(SituacionVivienda::class);
    }

    public function servicios(){
        return $this->hasMany(Servicio::class);
    }
}