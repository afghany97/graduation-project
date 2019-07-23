<?php

namespace App\Http\Controllers\Api;

use App\Complain;
use App\Department;
use App\Http\Requests\Api\ComplainsRequest;

class ComplainsController extends ApiController
{

    public function store(ComplainsRequest $request)
    {
        $complain = Complain::create(dataFromRequest(['department_id','type','topic','description']));

        return $this->created(compact('complain'));
    }

    public function show(Department $department)
    {
        $complains = $department->complains;

        return $this->fetched(compact('complains'));
    }
}