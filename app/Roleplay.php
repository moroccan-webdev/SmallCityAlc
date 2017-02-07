<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roleplay extends Model
{
  protected $fillable = [
      'name','city','center',
  ];

  public function comments()
  {
    return $this->hasMany('App\Comment');
  }

  public function showers()
  {
      return $this->belongsToMany('App\Shower');
  }
}
