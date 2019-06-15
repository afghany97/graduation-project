<?php

namespace App\Http\Controllers;

use App\Complain;
use App\Http\Requests\ComplainsRequest;
use Illuminate\Http\Request;

class ComplainsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        return view('website.complain');
    }


    public function store(ComplainsRequest $request)
    {
        Complain::create([
            'department' => request('department'),
            'complain_type' => request('complain_type'),
            'topic' => request('topic'),
            'description' => request('description'),
            'user_id' => auth()->id(),
        ]);
        return redirect('/home');
    }
}
