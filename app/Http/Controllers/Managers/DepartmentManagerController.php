<?php

namespace App\Http\Controllers\Managers;

use App\Manager;

class DepartmentManagerController extends MangerController
{
    public function index()
    {
        $this->authorize('isDepartmentManager',new Manager);

        $department = user()->department;

        $doctors = $department->doctors;

        return view('managers.department_manager.index',compact('doctors','department'));
    }
}
