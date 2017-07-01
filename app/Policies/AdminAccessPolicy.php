<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminAccessPolicy
{
    use HandlesAuthorization;

    public function root(User $user)
    {
        if ($user->idrole == IdRole('root')) {
            return true;
        }
    }
    public function IsFoto(User $user)
    {
        if (str_contains($user->codigo_rol,['root','admin','foto'])) {
            return true;
        }
    }
    public function IsAdmin(User $user)
    {
        if (str_contains($user->codigo_rol,['root','admin'])) {
            return true;
        }
    }
    public function admin(User $user)
    {
        if (str_contains($user->codigo_rol,['root','admin'])) {
            return true;
        }else{
            abort(423);
            return false;
        }
    }
}