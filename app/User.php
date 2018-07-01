<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tickets(){
        return $this->hasMany(\App\Tickets::class);
    }
    //Chaque utilisateur peut effectuer plusieurs traitements
    public function traitemnts()
    {
      return $this->hasMany(\App\Traitement::class);
    }
}
