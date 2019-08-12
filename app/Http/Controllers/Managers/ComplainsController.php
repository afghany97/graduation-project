<?php

namespace App\Http\Controllers\Managers;

use App\Complain;
use App\Utilities\Filters\ComplainsFilters;

class ComplainsController extends ManagerController
{
    public function index(ComplainsFilters $filters)
    {
        $complains = Complain::filter($filters)->get();

        return view('managers.complains.index',compact('complains'));
    }

    public function show(Complain $complain)
    {
        return view('managers.complains.show',compact('complain'));
    }
}
