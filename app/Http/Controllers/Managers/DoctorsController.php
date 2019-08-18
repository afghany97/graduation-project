<?php

namespace App\Http\Controllers\Managers;

use App\Department;
use App\Utilities\Filters\DoctorsFilters;

class DoctorsController extends ManagerController
{
    public function index(Department $department,DoctorsFilters $filters)
    {
        $doctors = $department->doctors()->filter($filters)->get();

        return view('managers.doctors.index',compact('department','doctors'));
    }
}
