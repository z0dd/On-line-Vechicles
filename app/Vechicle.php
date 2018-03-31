<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vechicle extends Model
{
    public function damage()
    {
    	return $this->hasMany('App\CarDamage');
    }

    public function kit()
    {
    	return $this->hasMany('App\CarKit');
    }

    public function damages()
    {
    	return $this->hasManyThrough('App\Damage', 'App\CarDamage');
    }

    public function kits()
    {
    	return $this->hasManyThrough('App\Kit', 'App\CarKit');
    }
}
