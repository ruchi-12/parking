<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Parking extends Model
{
    public function floors(){

    	return $this->hasMany('App\Floors');
    }
    
    public function slot(){
    	return $this->hasMany('App\Slots');
    }
    public function parkingfeatures(){
      return $this->hasMany('App\Parkingfeatures');
    }

    protected $fillable = [ 

       'title',
       'description',
       'status',
       'location',
       'image'
 ];
  protected $casts = [
        'location' => 'array',
    ];


   public static function boot() {
        parent::boot();
        static::deleting(function($parking){
         $parking->floors()->delete();
         $parking->slot()->delete();
        });
    }

}
