<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = [
      'username', 'body',
  ];

  public function roleplay()
  {
    return $this->belongsTo('App\Roleplay');
  }
}
