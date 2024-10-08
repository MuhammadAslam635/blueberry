<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;

class CategoryPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->isAdmin() || $user->isSuper();
    }

    public function create(User $user): bool
    {
        return $user->isAdmin() || $user->isSuper();
    }

    public function delete(User $user, Category $catgeory): bool
    {
        return $user->isAdmin() || $user->isSuper();
    }

    public function update(User $user): bool
    {

        return (bool) $user->isAdmin() || $user->isSuper() == true;
    }
}
