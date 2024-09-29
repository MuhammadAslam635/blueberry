<?php

namespace App\Policies;

use App\Models\Tag;
use App\Models\User;

class TagPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->isAdmin() || $user->isSuper();
    }

    public function create(User $user): bool
    {
        return $user->isAdmin() || $user->isSuper();
    }

    public function delete(User $user, Tag $tag): bool
    {
        return $user->isAdmin() || $user->isSuper();
    }

    public function update(User $user): bool
    {

        return (bool) $user->isAdmin() || $user->isSuper() == true;
    }
}
