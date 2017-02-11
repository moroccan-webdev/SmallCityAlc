<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
  protected $fillable = [
      'level',
  ];

  public function users()
  {
    return $this->hasMany('App\User');
  }

  public function roleplays()
  {
    return $this->hasMany('App\Roleplay');
  }

  public function worksheets()
  {
    return $this->hasMany('App\Worksheet');
  }
}
