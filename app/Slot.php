<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
  protected $fillable = [
      'daterange',
  ];

  public function worksheets()
  {
    return $this->hasMany('App\Worksheet');
  }

}
