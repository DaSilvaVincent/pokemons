<?php

namespace App\Policies;

use App\Models\Pokemon;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class PokemonPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return bool
     */
    public function viewAny(User $user) {
        return Auth::check();
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Pokemon $pokemon
     * @return bool
     */
    public function view(User $user, Pokemon $pokemon) {
        return Auth::check();
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return bool
     */
    public function create(User $user) {
        return True;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Pokemon $pokemon
     * @return bool
     */
    public function update(User $user, Pokemon $pokemon): bool {
        return $user->isAdmin() || $user->id === $pokemon->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Pokemon $pokemon
     * @return bool
     */
    public function delete(User $user, Pokemon $pokemon): bool {
        return $user->isAdmin() || $user->id === $pokemon->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Pokemon $pokemon
     * @return bool
     */
    public function restore(User $user, Pokemon $pokemon): bool {
        return $user->isAdmin() || $user->id === $pokemon->user_id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Pokemon $pokemon
     * @return bool
     */
    public function forceDelete(User $user, Pokemon $pokemon): bool {
        return $user->isAdmin() || $user->id === $pokemon->user_id;
    }

}
