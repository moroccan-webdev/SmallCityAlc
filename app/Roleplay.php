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

  public function users()
  {
      return $this->belongsToMany('App\User');
  }

  public function slots()
  {
      return $this->belongsToMany('App\Slot');
  }
}
