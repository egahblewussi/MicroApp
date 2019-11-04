<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use  App\Compte;

class Cotisation extends Model
{
    public function Compte()
    {
        return $this->hasMany(Compte::class);
    }
}
