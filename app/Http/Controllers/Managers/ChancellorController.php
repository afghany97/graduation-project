<?php

namespace App\Http\Controllers\Managers;

use App\Department;
use App\Manager;

class ChancellorController extends ManagerController
{
    public function index()
    {
        $this->authorize('isChancellor',new Manager);

        $departments = Department::all()->load('doctors');

        session()->forget('manager-active');

        return view('managers.chancellor.index',compact('departments'));
    }
}
