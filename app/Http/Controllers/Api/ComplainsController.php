<?php

namespace App\Http\Controllers\Api;

use App\Complain;
use App\Http\Requests\Api\ComplainsRequest;


class ComplainsController extends ApiController
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function store(ComplainsRequest $request)
    {

        $complain = auth()->user()->complains()->create(
            dataFromRequest([
                'department', 'complain_type', 'topic', 'description',
            ])
        );

        return $this->created(compact('complain'));

    }

}