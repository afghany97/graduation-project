<?php

namespace App\Http\Controllers\Api\Managers;

use App\Http\Controllers\Api\ApiController;

class ManagersApiController extends ApiController
{
    protected $guard = "managers-api";

    /**
     * ManagersApiController constructor.
     */
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }
}
