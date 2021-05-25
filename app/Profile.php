<?php

namespace App;

use App\Location;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function location()
    {
    	return $this->hasOne('App\Profile');
    }
}
