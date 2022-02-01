<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    use HasFactory;

    //Relacion unos a muchos

    public function senso(){
        return $this->hasMany(Senso::class);
    }

    public function sector(){
        return $this->hasMany(Sectore::class);
    }

    public function comunidad(){
        return $this->hasMany(Comunidade::class);
    }

    //Relacion uno a muchos inversa

    public function municipio(){
        return $this->belongsTo(Municipio::class);
    }
}
