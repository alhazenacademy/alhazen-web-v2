<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\QuizAnswer;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;

class QuizAnswerPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:QuizAnswer');
    }

    public function view(AuthUser $authUser, QuizAnswer $quizAnswer): bool
    {
        return $authUser->can('View:QuizAnswer');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:QuizAnswer');
    }

    public function update(AuthUser $authUser, QuizAnswer $quizAnswer): bool
    {
        return $authUser->can('Update:QuizAnswer');
    }

    public function delete(AuthUser $authUser, QuizAnswer $quizAnswer): bool
    {
        return $authUser->can('Delete:QuizAnswer');
    }

    public function restore(AuthUser $authUser, QuizAnswer $quizAnswer): bool
    {
        return $authUser->can('Restore:QuizAnswer');
    }

    public function forceDelete(AuthUser $authUser, QuizAnswer $quizAnswer): bool
    {
        return $authUser->can('ForceDelete:QuizAnswer');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:QuizAnswer');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:QuizAnswer');
    }

    public function replicate(AuthUser $authUser, QuizAnswer $quizAnswer): bool
    {
        return $authUser->can('Replicate:QuizAnswer');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:QuizAnswer');
    }
}
