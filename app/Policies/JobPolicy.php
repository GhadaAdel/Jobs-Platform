<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Job;

class JobPolicy
{
    /**
     * Create a new policy instance.
     */
    
    public function edit(User $user, Job $job): bool
    {
        return $job->employer->user->is($user);
    }
}
