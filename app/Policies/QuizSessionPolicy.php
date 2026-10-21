<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\QuizSession;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;

class QuizSessionPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:QuizSession');
    }

    public function view(AuthUser $authUser, QuizSession $quizSession): bool
    {
        return $authUser->can('View:QuizSession');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:QuizSession');
    }

    public function update(AuthUser $authUser, QuizSession $quizSession): bool
    {
        return $authUser->can('Update:QuizSession');
    }

    public function delete(AuthUser $authUser, QuizSession $quizSession): bool
    {
        return $authUser->can('Delete:QuizSession');
    }

    public function restore(AuthUser $authUser, QuizSession $quizSession): bool
    {
        return $authUser->can('Restore:QuizSession');
    }

    public function forceDelete(AuthUser $authUser, QuizSession $quizSession): bool
    {
        return $authUser->can('ForceDelete:QuizSession');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:QuizSession');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:QuizSession');
    }

    public function replicate(AuthUser $authUser, QuizSession $quizSession): bool
    {
        return $authUser->can('Replicate:QuizSession');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:QuizSession');
    }
}
