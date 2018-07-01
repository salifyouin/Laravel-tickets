<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traitement extends Model
{ 
    protected $table="traitements";
    protected $fillable=[
        'description',
        'duree',
        'user_id',
        'ticket_id'
    ];

    //un traitement conserne 1 et seul utlisateur(technicien)
    public function technicien()
    {
      return $this->belongsTo(\App\User::class,'user_id');
    }

    //chaque traitement concerne un et un seul tiket
    public function ticket()
    {
      return $this->belongsTo(\App\Ticket::class);
    }


    
}
