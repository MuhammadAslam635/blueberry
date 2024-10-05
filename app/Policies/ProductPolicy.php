<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;

class ProductPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->isAdmin() || $user->isSuper();
    }

    public function create(User $user): bool
    {
        return $user->isAdmin() || $user->isSuper();
    }

    public function delete(User $user,Product $product): bool
    {
        return $user->isAdmin() || $user->isSuper();
    }

    public function update(User $user): bool
    {

        return (bool) $user->isAdmin() || $user->isSuper() == true;
    }
    public function view(User $user): bool
    {
        return $user->isAdmin() || $user->isSuper();
    }
}
