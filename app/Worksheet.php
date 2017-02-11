<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worksheet extends Model
{
  protected $hidden = [
      'slot_id', 'level_id','students','teacher'
  ];

  public function level()
  {
    return $this->belongsTo('App\Level');
  }

  public function slot()
  {
    return $this->belongsTo('App\Slot');
  }

  public function roleplays()
  {
      return $this->belongsToMany('App\Roleplay');
  }
}
