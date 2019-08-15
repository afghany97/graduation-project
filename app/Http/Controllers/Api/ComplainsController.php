<?php

namespace App\Http\Controllers\Api;

use App\Complain;
use App\Http\Requests\Api\ComplainsRequest;

class ComplainsController extends ApiController
{
    /**
     * QuestionnairesController constructor.
     */

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function store(ComplainsRequest $request)
    {
        $complain = Complain::create(array_merge(['user_id' => auth()->id()],dataFromRequest(['department_id','type','topic','description'])));

        return $this->created(compact('complain'));
    }

}