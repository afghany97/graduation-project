<?php

namespace App\Http\Controllers\Api\Managers;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\ManagersLoginRequest;

class AuthController extends ApiController
{
    private $guard = "managers";

    public function login(ManagersLoginRequest $request)
    {
        if (auth($this->guard)->attempt(['email' => request('email'), 'password' => request('password')])) {

            $manager = auth($this->guard)->user();

            $token = $manager->createToken(config('app.name'))->accessToken;

            return $this->authenticated(compact('token', 'manager'));

        } else {

            return $this->unauthenticated();
        }
    }

}
