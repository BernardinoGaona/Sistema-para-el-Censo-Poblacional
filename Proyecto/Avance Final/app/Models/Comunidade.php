<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunidade extends Model
{
    use HasFactory;

    //Relacion unos a muchos

    public function senso(){
        return $this->hasMany(Senso::class);
    }

    public function consejo(){
        return $this->hasMany(Consejo::class);
    }

    public function Situacion(){
        return $this->hasMany(SituacionVivienda::class);
    }

    //Relacion uno a muchos inversa

    public function sector(){
        return $this->belongsTo(Sectore::class);
    }

    public function parroquia(){
        return $this->belongsTo(Parroquia::class);
    }
}
