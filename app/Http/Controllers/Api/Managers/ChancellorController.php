<?php

namespace App\Http\Controllers\Api\Managers;

use App\Department;

class ChancellorController extends ManagersApiController
{
    public function index()
    {
        if(auth($this->guard)->user()->role == config('auth.roles.chancellor')) {

            $departments = Department::all()->load('doctors');

            return $this->fetched(compact('departments'));

        } else {

            return $this->unauthorized();
        }
    }
}
