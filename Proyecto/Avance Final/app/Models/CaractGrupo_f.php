<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaractGrupo_f extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at']; 

    //Relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function personas(){
        return $this->belongsTo(Persona::class);
    }

    public function nucleo(){
        return $this->belongsTo(Nucleo_f::class);
    }

    public function camisas(){
        return $this->belongsTo(TallaCamisa::class);
    }

    public function pantalones(){
        return $this->belongsTo(TallaPantalone::class);
    }
}
