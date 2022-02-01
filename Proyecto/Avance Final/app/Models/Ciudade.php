<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudade extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa

    public function estado(){
        return $this->belongsTo(Estado::class);
    }

    //Relacion unos a muchos

    public function sector(){
        return $this->hasMany(Sectore::class);
    }
}
