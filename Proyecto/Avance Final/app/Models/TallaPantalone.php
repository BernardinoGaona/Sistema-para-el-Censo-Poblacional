<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TallaPantalone extends Model
{
    use HasFactory;

    //Relacion unos a muchos

    public function Caracteristica_GF(){
        return $this->hasMany(CaractGrupo_f::class);
    }
}
