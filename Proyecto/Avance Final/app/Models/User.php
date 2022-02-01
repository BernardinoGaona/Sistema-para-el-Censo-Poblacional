<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //Relacion unos a muchos

    public function Vivienda(){
        return $this->hasMany(Vivienda::class);
    }

    public function Persona(){
        return $this->hasMany(Persona::class);
    }

    public function Nucleo_Familiar(){
        return $this->hasMany(Nucleo_f::class);
    }

    public function Caracteristica_GF(){
        return $this->hasMany(CaractGrupo_f::class);
    }

    public function Servicio(){
        return $this->hasMany(Servicio::class);
    }

    public function Situacion_V(){
        return $this->hasMany(Situacion_Vivienda::class);
    }

    public function senso(){
        return $this->hasMany(Senso::class);
    }

    //Relacion uno a uno poliformica

    //public function image(){
    //    return $this->morphOne(image::class, 'imageable');
    //}


    public function adminlte_image(){

        return 'https://picsum.photos/300/300';
    }

    public function adminlte_desc(){
        return "Administrador";
    }
}
