<?php

namespace App\Http\Controllers;

use App\User;
use App\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $subjects = auth()->user()->subjects()->get();
        return view('home', compact('subjects'));
    }
}
