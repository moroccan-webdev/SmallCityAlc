<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roleplay extends Model
{
  protected $fillable = [
      'name','city','center','level_id','body'
  ];

  public function users()
  {
      return $this->belongsToMany('App\User');
  }

  public function level()
  {
    return $this->belongsTo('App\Level');
  }

  public function worksheets()
  {
      return $this->belongsToMany('App\Worksheet');
  }
}
