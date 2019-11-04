<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    public function Compte()
    {
        return $this->hasMany(Compte::class);
    }
}
