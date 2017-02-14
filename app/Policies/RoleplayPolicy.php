<?php

namespace App\Policies;

use App\User;
use App\Roleplay;
use Illuminate\Auth\Access\HandlesAuthorization;

class RoleplayPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
    {
      if($user->isAdmin()){
        return true;
      }
    }

    /**
     * Determine whether the user can view the roleplay.
     *
     * @param  \App\User  $user
     * @param  \App\Roleplay  $roleplay
     * @return mixed
     */
    public function view(User $user, Roleplay $roleplay = null)
    {
        return $user->isTeacher();
    }

    /**
     * Determine whether the user can create roleplays.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the roleplay.
     *
     * @param  \App\User  $user
     * @param  \App\Roleplay  $roleplay
     * @return mixed
     */
    public function update(User $user, Roleplay $roleplay = null)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the roleplay.
     *
     * @param  \App\User  $user
     * @param  \App\Roleplay  $roleplay
     * @return mixed
     */
    public function delete(User $user, Roleplay $roleplay = null)
    {
        return false;
    }
}
