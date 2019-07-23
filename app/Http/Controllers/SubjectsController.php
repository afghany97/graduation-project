<?php

namespace App\Http\Controllers;

class SubjectsController extends Controller
{
    /**
     * SubjectsController constructor.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        $student = auth()->user();

        $subjects = $student->subjects()->get();

        return view('home', compact('subjects','student'));
    }
}
