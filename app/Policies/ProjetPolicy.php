<?php

namespace App\Policies;

use App\User;
use App\Projet;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjetPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the projet.
     *
     * @param  \App\User  $user
     * @param  \App\Projet  $projet
     * @return mixed
     */
    public function view(User $user, Projet $projet)
    {
        return true;
    }

    /**
     * Determine whether the user can create projets.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the projet.
     *
     * @param  \App\User  $user
     * @param  \App\Projet  $projet
     * @return mixed
     */
    public function update(User $user, Projet $projet)
    {
        return $projet->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the projet.
     *
     * @param  \App\User  $user
     * @param  \App\Projet  $projet
     * @return mixed
     */
    public function delete(User $user, Projet $projet)
    {
        return $projet->user_id === $user->id;
    }
    
    /**
     * Applies to all policies.
     *
     * @param  User $user
     * @return boolean
     */
    public function before(User $user, $ability)
    {
    	if ($user->isAdmin())
    		return true;
        //return $user->isAdmin();
    }
    
    /**
     * List projet.
     *
     * @param  User   $user
     * @return boolean
     */
    public function list(User $user)
    {
        return true;
    }
}
