<?php

namespace App\Http\Controllers\Managers;

use App\Department;

class DoctorsController extends ManagerController
{
    public function index(Department $department)
    {
        $doctors = $department->doctors;

        return view('managers.doctors.index',compact('department','doctors'));
    }
}
