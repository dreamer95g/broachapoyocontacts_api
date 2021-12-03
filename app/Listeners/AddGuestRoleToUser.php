<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\Registered;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AddGuestRoleToUser
{
    //DARLE ROL DE INVITADO AL USUARIO QUE SE REGISTRE
    public function handle(Registered $event)
    {
        $user = $event->user;

        DB::insert(' insert into role_user (role_id, user_id) values (?, ?) ', [5, $user->id]);
    }
}
