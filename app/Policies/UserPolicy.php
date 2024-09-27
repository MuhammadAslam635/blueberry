<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function create(User $user): bool
    {
        return $user->isAdmin() || $user->isSuper();
    }

    public function delete(User $user): bool
    {
        return $user->isAdmin() || $user->isSuper();
    }

    public function edit(User $user): bool
    {
        return $user->isAdmin() || $user->isSuper();
    }

    public function viewAny(User $user): bool
    {
        return $user->isAdmin() || $user->isSuper();
    }
}
