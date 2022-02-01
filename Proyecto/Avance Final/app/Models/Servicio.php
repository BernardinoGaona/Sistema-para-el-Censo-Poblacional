<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function nucleo(){
        return $this->belongsTo(Nucleo_f::class);
    }

    public function vivienda(){
        return $this->belongsTo(Vivienda::class);
    }
}
