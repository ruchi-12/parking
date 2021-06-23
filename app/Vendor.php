<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model{
    


    //join addresses 
    public function addresses(){

    	return $this->hasMany('App\Address','App\Floor');
    }
}
