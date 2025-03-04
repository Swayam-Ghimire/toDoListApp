<?php

namespace App\Policies;

use App\Models\ToDos;
use App\Models\User;


class TodoPolicy
{
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ToDos $toDos): bool
    {
        return $user->id === $toDos->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ToDos $toDos): bool
    {
        return $user->id === $toDos->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ToDos $toDos): bool
    {
        return $user->id === $toDos->user_id;
    }

    public function complete(User $user, ToDos $toDos): bool
    {
        return $user->id === $toDos->user_id;
    }
}