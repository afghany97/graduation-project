<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\QuestionnairesRequest;
use App\Questionnaire;

class QuestionnairesController extends ApiController
{
    /**
     * QuestionnairesController constructor.
     */

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $questionnaires = Questionnaire::all();

        return $this->fetched(compact('questionnaires'));
    }

    public function store(QuestionnairesRequest $questionnairesRequest)
    {

        $questionnaire = auth()->user()->questionnaires()->create(

            dataFromRequest(['subject_id', 'doctor_id', 'doctor', 'classroom', 'doctor_assistant', 'material', 'sections', 'exams', 'content'])

        );

        return $this->created(compact('questionnaire'));
    }
}
