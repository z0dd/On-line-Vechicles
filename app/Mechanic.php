<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    function user()
    {
    	return $this->hasOne('App\User', 'id', 'user_id');
    }
}
