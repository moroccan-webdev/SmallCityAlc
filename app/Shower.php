<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shower extends Model
{
  protected $fillable = [
      'name','email','level_id','stars','class','teacher','image','phone',
  ];

  public function level()
  {
    return $this->belongsTo('App\Level');
  }

  public function roleplays()
  {
      return $this->belongsToMany('App\Roleplay');
  }
}
