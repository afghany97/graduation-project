<?php

namespace App\Http\Controllers\Managers;

use App\Manager;

class ChancellorController extends MangerController
{
    public function index()
    {
        $this->authorize('isChancellor',new Manager);

        return view('managers.chancellor.index');
    }
}
