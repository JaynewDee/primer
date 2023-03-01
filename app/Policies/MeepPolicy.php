<?php

namespace App\Policies;

use App\Models\Meep;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class MeepPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Meep $meep): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Meep $meep): bool
    {
        return $meep->user()->is($user);

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Meep $meep): bool
    {
        return $this->update($user, $meep);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Meep $meep): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Meep $meep): bool
    {
        //
    }
}
