<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
  protected $fillable = [
      'from','to'
  ];

  public function roleplays()
  {
      return $this->belongsToMany('App\Roleplay');
  }
}
