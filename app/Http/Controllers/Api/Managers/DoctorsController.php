<?php

namespace App\Http\Controllers\Api\Managers;

use App\Department;

class DoctorsController extends ManagersApiController
{
    public function index(Department $department)
    {
        $manager = auth($this->guard)->user();

        if( ($manager->role == config('auth.roles.department_manager') && $manager->department->id == $department->id) || $manager->role == config('auth.roles.chancellor') ){

            $doctors = $department->doctors;

            foreach ($doctors as $doctor){

                $doctor->avg = $doctor->getAverageEvaluation();

            }

            return $this->fetched(compact('department'));

        } else {

            return $this->unauthorized();
        }

    }

}
