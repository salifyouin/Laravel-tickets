<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priorite extends Model
{
    protected $table='priorites';
// une priorité conserne un et un et seul ticket
    public function tickets(){
        return $this->hasMany(\App\Ticket::class);
    }
}
