<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    //Relacion unos a muchos

    public function senso(){
        return $this->hasMany(Senso::class);
    }

    public function municipio(){
        return $this->hasMany(Municipio::class);
    }

    public function ciudad(){
        return $this->hasMany(Ciudade::class);
    }
}
