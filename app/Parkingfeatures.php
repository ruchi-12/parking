<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parkingfeatures extends Model
{
    protected $fillable = [ 

       'feature',
       
 ];
 public function parking(){
      return $this->hasMany('App\Parking');
    }

}
