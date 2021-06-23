<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slots extends Model
{
     public function floors(){
    	return $this->belongsTo('App\floors');
    }

}
