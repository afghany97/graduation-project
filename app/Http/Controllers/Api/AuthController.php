<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\LoginRequest;
use App\Http\Requests\Api\RegisterRequest;
use App\User;
use Illuminate\Database\QueryException;

class AuthController extends ApiController
{

    /**
     * @param LoginRequest $apiRequest
     * @return \Illuminate\Http\JsonResponse
     */

    public function login(LoginRequest $apiRequest)
    {
        if (auth()->attempt(['c_id' => request('c_id'), 'password' => request('password')])) {

            $user = auth()->user();

            $token = $user->createToken(config('app.name'))->accessToken;

            return $this->authenticated(compact('token', 'user'));

        } else {

            return $this->unauthenticated();
        }
    }

    /**
     * @param RegisterRequest $apiRequest
     * @return \Illuminate\Http\JsonResponse
     */

    public function register(RegisterRequest $apiRequest)
    {
        try {

            $user = User::create([

                'c_id' => request('c_id'),

                'password' => bcrypt(request('password'))

            ]);

        } catch (QueryException $exception) {

            return $this->creationFailed($exception);
        }

        auth()->login($user);

        return $this->created(['user' => $user, 'token' => $user->createToken(config('app.name'))->accessToken]);
    }
}