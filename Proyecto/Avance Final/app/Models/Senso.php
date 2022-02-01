<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senso extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function consejo(){
        return $this->belongsTo(Consejo::class);
    }

    public function estado(){
        return $this->belongsTo(Estado::class);
    }

    public function municipio(){
        return $this->belongsTo(Municipio::class);
    }

    public function parroquia(){
        return $this->belongsTo(Parroquia::class);
    }

    public function sector(){
        return $this->belongsTo(Sectore::class);
    }

    public function comunidad(){
        return $this->belongsTo(Comunidade::class);
    }

    public function nucleo(){
        return $this->belongsTo(Nucleo_f::class);
    }
}
