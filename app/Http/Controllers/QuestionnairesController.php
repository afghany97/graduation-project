<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Subject;
use Illuminate\Http\Request;

class QuestionnairesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
//    public function create()
//    {
//        return view('website.questionnaire');
//    }

    public function create(Subject $subject)
    {
        $doctors = $subject->doctors;
        $assistants=$subject->TeachingAssistant;

        return view('website.questionnaire', compact('subject', 'doctors','assistants'));
    }
}
