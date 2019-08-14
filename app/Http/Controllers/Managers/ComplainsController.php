<?php

namespace App\Http\Controllers\Managers;

use App\Complain;
use App\Utilities\Filters\ComplainsFilters;

class ComplainsController extends ManagerController
{
    public function index(ComplainsFilters $filters)
    {
        $complains = user()->isDean() ? Complain::filter($filters)->get() : user()->department->complains()->filter($filters)->get();

        session()->put('manager-active','complains');

        return view('managers.complains.index',compact('complains'));
    }

    public function show(Complain $complain)
    {
        session()->put('manager-active','complains');

        return view('managers.complains.show',compact('complain'));
    }
}
