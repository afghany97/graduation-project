<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;

class MangerController extends Controller
{

    /**
     * MangerController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:managers');
    }

    public function index()
    {
        return view('managers.dashboard');
    }
}
