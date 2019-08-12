<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;

class ManagerController extends Controller
{
    /**
     * ManagerController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:managers');
    }

}
