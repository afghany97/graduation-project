<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\CreateComplainRequest;

class ComplainsController extends Controller
{
    /**
     * ComplainsController constructor.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $departments = Department::all();

        session()->put('student-active','complains');

        return view('complains.create',compact('departments'));
    }


    public function store(CreateComplainRequest $request)
    {
        auth()->user()->complains()->create(dataFromRequest(['department_id','type','topic','description']));

        flash()->success('Complain Created Successfully');

        return back();
    }
}
