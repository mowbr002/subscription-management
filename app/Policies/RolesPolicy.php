<?php

namespace App\Policies;

//use ;
use App\Roles;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the roles.
     *
     * @param  \  $user
     * @param  \App\Roles  $roles
     * @return mixed
     */
    public function view(User $user, Roles $roles)
    {
        //
    }

    /**
     * Determine whether the user can create roles.
     *
     * @param  \  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the roles.
     *
     * @param  \  $user
     * @param  \App\Roles  $roles
     * @return mixed
     */
    public function update(User $user, Roles $roles)
    {
        //
    }

    /**
     * Determine whether the user can delete the roles.
     *
     * @param  \  $user
     * @param  \App\Roles  $roles
     * @return mixed
     */
    public function delete(User $user, Roles $roles)
    {
        //
    }
    
    public function view_admin(User $user, Roles $roles){
    	return true;
    }
}
