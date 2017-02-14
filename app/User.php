<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','level_id', 'role_id', 'class','phone', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function level()
    {
      return $this->belongsTo('App\Level');
    }

    public function roleplays()
    {
        return $this->belongsToMany('App\Roleplay');
    }
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function feedbacks()
    {
      return $this->hasMany('App\Feedback');
    }

    public function isAdmin() {
        return $this->role->role == 'Administrator';
    }

    public function isTeacher() {
        return $this->role->role == 'Teacher';
    }

    public function isStudent() {
        return $this->role->role == 'Student';
    }
}
