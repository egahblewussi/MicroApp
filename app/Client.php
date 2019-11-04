<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Client extends Model
{
    public function agent()
    {
        return $this->belongsTo('App\Agent');
     
    }

   
}
