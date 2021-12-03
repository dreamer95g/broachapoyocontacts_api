<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        $role = $user->roles()->first()->name;
        return $role == "admin";
    }

    public function view(User $user)
    {
        $role = $user->roles()->first()->name;
        return $role == "admin";
    }


    public function create(User $user)
    {
        $role = $user->roles()->first()->name;
        return $role == "admin";
    }


    public function update(User $user)
    {
        $role = $user->roles()->first()->name;
        return $role == "admin";
    }


    public function delete(User $user)
    {
        $role = $user->roles()->first()->name;
        return $role == "admin";
    }

    public function restore(User $user)
    {
        $role = $user->roles()->first()->name;
        return $role == "admin";
    }


    public function forceDelete(User $user)
    {
        $role = $user->roles()->first()->name;
        return $role == "admin";
    }
}
