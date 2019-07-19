<?php

namespace App\Http\Controllers\Managers;


use App\Department;

class DoctorsController extends MangerController
{
    public function index(Department $department)
    {
        $doctors = $department->doctors;

        return view('managers.doctors.index',compact('department','doctors'));
    }
}
