<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
  protected $fillable = [
      'level',
  ];

  public function showers()
  {
    return $this->hasMany('App\Shower');
  }
}
