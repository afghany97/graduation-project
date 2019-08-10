<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagerLoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest:managers')->except('logout');
    }

    protected $guard = "managers";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        return view('managers.auth.login');
    }

    public function loginAdmin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard($this->guard)->attempt(['c_id' => $request->c_id, 'password' => $request->password], $request->remember)) {

            if(Auth::guard($this->guard)->user()->role == config('auth.roles.department_manager'))
            {
                return redirect()->route('manager.department_manager.dashboard');
            }
            else
            {
                return redirect()->route('manager.chancellor.dashboard');
            }

        }

        return $this->sendFailedLoginResponse($request);

    }

    public function logout()
    {
        Auth::guard($this->guard)->logout();

        return redirect()->route('manager.auth.login.department_manager');
    }

    protected function username()
    {
        return 'c_id';
    }
}
