<?php

namespace App\Policies;

use App\User;
use App\Contact;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
    {
      if($user->isAdmin()){
        return true;
      }
    }

    /**
     * Determine whether the user can view the contact.
     *
     * @param  \App\User  $user
     * @param  \App\Contact  $contact
     * @return mixed
     */
    public function view(User $user, Contact $contact= null)
    {
        return false;
    }

    /**
     * Determine whether the user can create contacts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true; //subborn method
    }

    /**
     * Determine whether the user can update the contact.
     *
     * @param  \App\User  $user
     * @param  \App\Contact  $contact
     * @return mixed
     */
    public function update(User $user, Contact $contact)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the contact.
     *
     * @param  \App\User  $user
     * @param  \App\Contact  $contact
     * @return mixed
     */
    public function delete(User $user, Contact $contact)
    {
        return false;
    }
}
