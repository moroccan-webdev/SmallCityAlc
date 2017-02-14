<?php

namespace App\Policies;

use App\User;
use App\Worksheet;
use Illuminate\Auth\Access\HandlesAuthorization;

class WorksheetPolicy
{
    use HandlesAuthorization;

    //php artisan make:policy WorksheetPolicy --model=Worksheet

    public function before(User $user, $ability)
    {
      if($user->isAdmin()){
        return true;
      }
    }

    /**
     * Determine whether the user can view the worksheet.
     *
     * @param  \App\User  $user
     * @param  \App\Worksheet  $worksheet
     * @return mixed
     */
    public function view(User $user, Worksheet $worksheet = null)
    {
        return false;
    }

    /**
     * Determine whether the user can create worksheets.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
      return $user->isTeacher();

    }

    /**
     * Determine whether the user can update the worksheet.
     *
     * @param  \App\User  $user
     * @param  \App\Worksheet  $worksheet
     * @return mixed
     */
    public function update(User $user, Worksheet $worksheet)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the worksheet.
     *
     * @param  \App\User  $user
     * @param  \App\Worksheet  $worksheet
     * @return mixed
     */
    public function delete(User $user, Worksheet $worksheet)
    {
        return false;
    }


}
