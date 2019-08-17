<?php

namespace App\Http\Controllers\Api\Managers;

class DepartmentManagerController extends ManagersApiController
{

    public function index()
    {
        if(auth($this->guard)->user()->role == config('auth.roles.department_manager')) {

            $department = user()->department;

            $doctors = $department->doctors;

            foreach ($doctors as $doctor){

                $doctor->avg = $doctor->getAverageEvaluation();
            }

            return $this->fetched(compact('department'));

        } else{

            return $this->unauthorized();

        }

    }

}
