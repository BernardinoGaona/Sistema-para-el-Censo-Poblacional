<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    //Relacion unos a muchos

    public function senso(){
        return $this->hasMany(Senso::class);
    }

    public function parroquia(){
        return $this->hasMany(Parroquia::class);
    }


    //Relacion uno a muchos inversa

    public function estado(){
        return $this->belongsTo(Estado::class);
    }
}
