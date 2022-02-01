<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SituacionVivienda extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at']; 

    //Relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function nucleo(){
        return $this->belongsTo(Nucleo_f::class);
    }

    public function comunidad(){
        return $this->belongsTo(Comunidade::class);
    }

    public function vivienda(){
        return $this->belongsTo(Vivienda::class);
    }
}
