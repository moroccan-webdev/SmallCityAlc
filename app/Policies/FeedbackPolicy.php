<?php

namespace App\Policies;

use App\User;
use App\Feedback;
use Illuminate\Auth\Access\HandlesAuthorization;

class FeedbackPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
    {
      if($user->isAdmin()){
        return true;
      }
    }

    /**
     * Determine whether the user can view the feedback.
     *
     * @param  \App\User  $user
     * @param  \App\Feedback  $feedback
     * @return mixed
     */
    public function view(User $user, Feedback $feedback = null)
    {
        return false;
    }

    /**
     * Determine whether the user can create feedback.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isTeacher();
    }

    /**
     * Determine whether the user can update the feedback.
     *
     * @param  \App\User  $user
     * @param  \App\Feedback  $feedback
     * @return mixed
     */
    public function update(User $user, Feedback $feedback)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the feedback.
     *
     * @param  \App\User  $user
     * @param  \App\Feedback  $feedback
     * @return mixed
     */
    public function delete(User $user, Feedback $feedback)
    {
        return false;
    }
}
