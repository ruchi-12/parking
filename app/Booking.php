<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $casts = ['feature' => 'array'];
    public function parking(){
    	return $this->belongsTo('App\Parking');
    }
     public function payment(){
    	return $this->belongsTo('App\Payment');
    }
}
