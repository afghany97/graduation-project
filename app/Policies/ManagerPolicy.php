<?php

namespace App\Policies;

use App\Manager;
use Illuminate\Auth\Access\HandlesAuthorization;

class ManagerPolicy
{
    use HandlesAuthorization;

    public function isDepartmentManager(Manager $manager)
    {
        return $manager->role == config('auth.roles.department_manager');
    }

    public function isChancellor(Manager $manager)
    {
        return $manager->role == config('auth.roles.chancellor');
    }
}
