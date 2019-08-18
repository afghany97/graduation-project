<?php

namespace App\Http\Controllers\Managers;

use App\Doctor;
use App\Manager;
use App\Utilities\Filters\DoctorsFilters;

class DepartmentManagerController extends ManagerController
{
    public function index(DoctorsFilters $filters)
    {
        $this->authorize('isDepartmentManager',new Manager);

        $department = user()->department;

        $doctors = $department->doctors()->filter($filters)->get();

        session()->forget('manager-active');

        return view('managers.department_manager.index',compact('doctors','department'));
    }
}
