<?php

namespace App\Http\Controllers;

use App\Complain;
use App\Department;
use App\Http\Requests\ComplainsRequest;

class ComplainsController extends Controller
{

    public function create()
    {
        $departments = Department::all();

        return view('complains.create',compact('departments'));
    }


    public function store(ComplainsRequest $request)
    {
        Complain::create(dataFromRequest(['department_id','type','topic','description']));

        flash()->success('Complain Created Successfully');

        return back();
    }
}
