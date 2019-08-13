<?php

namespace App\Http\Controllers\Managers;

use App\Complain;
use App\Manager;

class ComplainsManagerController extends MangerController
{
    public function index()
    {
        $complains = Complain::all();
        return view('managers.complains.index', compact('complains'));
    }

    public function show(Complain $complain)
    {

        return view('managers.complains.show', compact('complain'));

    }
}
