<?php

namespace App\Http\Controllers\Api\Managers;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\ManagersLoginRequest;

class AuthController extends ApiController
{
    private $guard = "managers-api";

    public function login(ManagersLoginRequest $request)
    {
        if ( $token = auth($this->guard)->attempt(['email' => request('email'), 'password' => request('password')])) {

            $manager = auth($this->guard)->user();


            return $this->authenticated(compact('token', 'manager'));

        } else {

            return $this->unauthenticated();
        }
    }

}
