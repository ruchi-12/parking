<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    public function vendor(){
    	return $this->hasMany('App\Vendor');
    }
}
