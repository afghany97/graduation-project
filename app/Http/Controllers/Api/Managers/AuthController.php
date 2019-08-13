<?php

namespace App\Http\Controllers\Api\Managers;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\ManagersLoginRequest;

class AuthController extends ApiController
{
    private $guard = "managers-api";

    public function deanLogin(ManagersLoginRequest $request)
    {
        if ( $token = auth($this->guard)->attempt(['c_id' => request('c_id'), 'password' => request('password')])) {

            $manager = auth($this->guard)->user();

            if($manager->role == config('auth.roles.chancellor')){

                return $this->authenticated(compact('token', 'manager'));

            } else {

                return $this->unauthenticated();
            }


        } else {

            return $this->unauthenticated();
        }
    }

    public function departmentLogin(ManagersLoginRequest $request)
    {
        if ( $token = auth($this->guard)->attempt(['c_id' => request('c_id'), 'password' => request('password')])) {

            $manager = auth($this->guard)->user();

            if($manager->role == config('auth.roles.department_manager')){

                return $this->authenticated(compact('token', 'manager'));

            } else {

                return $this->unauthenticated();
            }

        } else {

            return $this->unauthenticated();
        }
    }


}
