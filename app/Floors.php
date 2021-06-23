<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floors extends Model
{
      protected $casts = [
        'number' => 'array',
         'parking_id' => 'array',
          'status' => 'array'
       
    ];
    public function slots(){

    	return $this->hasMany('App\Slots');
    }

    public function parking(){
    	return $this->belongsTo('App\Parking');
    }
}
