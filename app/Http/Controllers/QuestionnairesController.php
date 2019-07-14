<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\QuestionnairesRequest;
use App\Http\Requests\CreateQuestionnaireRequest;
use App\Questionnaire;
use App\Subject;

class QuestionnairesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param Subject $subject
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function create(Subject $subject)
    {
        $doctors = $subject->doctors;

        $assistants=$subject->TeachingAssistant;

        return view('questionnaires.create', compact('subject', 'doctors','assistants'));
    }

    /**
     * @param Subject $subject
     * @param CreateQuestionnaireRequest $formRequest
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Subject $subject, CreateQuestionnaireRequest $formRequest)
    {
        $attributes = array_merge(['subject_id','doctor_id'], Questionnaire::attributes());

        $questionnaire = auth()->user()->questionnaires()->create(

            dataFromRequest($attributes)

        );

        flash()->success("Questionnaire");

        return redirect()->route('home');

    }
}
