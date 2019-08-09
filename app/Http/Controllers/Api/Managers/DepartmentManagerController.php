<?php

namespace App\Http\Controllers\Api\Managers;

class DepartmentManagerController extends ManagersApiController
{

    public function index()
    {
        if(auth($this->guard)->user()->role == config('auth.roles.department_manager')) {

            $department = user()->department;

            $doctors = $department->doctors;

            return $this->fetched(compact('doctors','department'));

        } else{

            return $this->unauthorized();

        }

    }

}
