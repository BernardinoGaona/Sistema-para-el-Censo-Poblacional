<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;

    //Relacion unos a muchos

    public function Persona(){
        return $this->hasMany(Persona::class);
    }

}
