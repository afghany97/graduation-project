<?php

namespace App\Http\Controllers\Managers;

use App\Manager;

class DepartmentManagerController extends MangerController
{
    public function index()
    {
        $this->authorize('isDepartmentManager',new Manager);

    }
}
