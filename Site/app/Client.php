<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Agent;
use App\Client;

class Client extends Model
{
    public function agent()
    {
        return $this->belongsTo(Agent::class);
        return $this->belongsTo(Client::class);
    }

   
}
