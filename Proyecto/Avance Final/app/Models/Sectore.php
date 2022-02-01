<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sectore extends Model
{
    use HasFactory;

    //Relacion unos a muchos

    public function senso(){
        return $this->hasMany(Senso::class);
    }

    public function comunidad(){
        return $this->hasMany(Comunidade::class);
    }


    //Relacion uno a muchos inversa

    public function ciudad(){
        return $this->belongsTo(Ciudade::class);
    }

    public function parroquia(){
        return $this->belongsTo(Parroquia::class);
    }
}
