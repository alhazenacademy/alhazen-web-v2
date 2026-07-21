<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\LeadNumber;
use Illuminate\Auth\Access\HandlesAuthorization;

class LeadNumberPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:LeadNumber');
    }

    public function view(AuthUser $authUser, LeadNumber $leadNumber): bool
    {
        return $authUser->can('View:LeadNumber');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:LeadNumber');
    }

    public function update(AuthUser $authUser, LeadNumber $leadNumber): bool
    {
        return $authUser->can('Update:LeadNumber');
    }

    public function delete(AuthUser $authUser, LeadNumber $leadNumber): bool
    {
        return $authUser->can('Delete:LeadNumber');
    }

    public function restore(AuthUser $authUser, LeadNumber $leadNumber): bool
    {
        return $authUser->can('Restore:LeadNumber');
    }

    public function forceDelete(AuthUser $authUser, LeadNumber $leadNumber): bool
    {
        return $authUser->can('ForceDelete:LeadNumber');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:LeadNumber');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:LeadNumber');
    }

    public function replicate(AuthUser $authUser, LeadNumber $leadNumber): bool
    {
        return $authUser->can('Replicate:LeadNumber');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:LeadNumber');
    }

}