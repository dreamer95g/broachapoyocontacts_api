<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ForeignMissionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {

        return true;
    }

    public function view(User $user)
    {

        return true;
    }


    public function create(User $user)
    {
        $role = $user->roles()->first()->name;
        return $role == "admin" || $role == "secretary" || $role == "coordinator";
    }


    public function update(User $user)
    {
        $role = $user->roles()->first()->name;
        return $role == "admin" || $role == "secretary" || $role == "coordinator";
    }


    public function delete(User $user)
    {
        $role = $user->roles()->first()->name;
        return $role == "admin" || $role == "secretary" || $role == "coordinator";
    }

    public function restore(User $user)
    {
        $role = $user->roles()->first()->name;
        return $role == "admin" || $role == "secretary" || $role == "coordinator";
    }


    public function forceDelete(User $user)
    {
        $role = $user->roles()->first()->name;
        return $role == "admin" || $role == "secretary" || $role == "coordinator";
    }
}
