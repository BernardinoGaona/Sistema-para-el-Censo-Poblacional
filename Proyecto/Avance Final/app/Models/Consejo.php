<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consejo extends Model
{
    use HasFactory;

    //Relacion unos a muchos

    public function senso(){
        return $this->hasMany(Senso::class);
    }

    //Relacion uno a muchos inversa

    public function comunidad(){
        return $this->belongsTo(Comunidade::class);
    }
}
