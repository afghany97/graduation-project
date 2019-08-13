<?php

namespace App\Http\Controllers\Api\Managers;

use App\Complain;
use App\Utilities\Filters\ComplainsFilters;

class ComplainController extends ManagersApiController
{
    public function index(ComplainsFilters $filters)
    {
        $complains = auth($this->guard)->user()->isDean() ? Complain::filter($filters)->get() : auth($this->guard)->user()->department->complains()->filter($filters)->get();

        return $this->fetched(compact('complains'));
    }

    public function show(Complain $complain)
    {
        return $this->fetched(compact('complain'));
    }
}
