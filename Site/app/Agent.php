<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;

class Agent extends Model
{
    public function Client()
{
    return $this->hasMany(Client::class);
}
}
