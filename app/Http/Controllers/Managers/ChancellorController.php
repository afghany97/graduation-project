<?php

namespace App\Http\Controllers\Managers;

use App\Department;
use App\Manager;

class ChancellorController extends MangerController
{
    public function index()
    {
        $this->authorize('isChancellor',new Manager);

        $departments = Department::all()->load('doctors');

        return view('managers.chancellor.index',compact('departments'));
    }
}
