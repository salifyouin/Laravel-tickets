<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table="tickets";
    protected $fillable=[
        'message',
        'etat',
        'user_id',
        'priorite_id'
    ];
    //chaque tickets peut avoir plusieurs priorites
    public function priorite(){
        return $this->belongsTo(\App\Priorite::class);
    }
    //chaque utilisateur peut traiter plusieurs tickets
    public function user(){
        return $this->belongsTo(\App\User::class);
    }
      public function traitements(){
        return $this->hasMany(\App\Traitement::class);
      }
}
