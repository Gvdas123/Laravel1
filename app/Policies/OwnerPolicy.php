<?php

namespace App\Policies;

use App\Models\Owner;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class OwnerPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return true;
    }
    
    public function view(User $user, Owner $item)
    {
        return $user->id==$item->user_id || $user->role==0  || $user->role==2;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
         return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Owner $item)
    {
        return $user->id==$item->user_id || $user->role==0;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Owner $owner)
    {
        return true;
    }

}
