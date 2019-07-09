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
        $attributes = array_merge(['subject_id','doctor_id'], Questionnaire::attributes());

        $questionnaire = auth()->user()->questionnaires()->create(

            dataFromRequest($attributes)

        );

        return $this->created(compact('questionnaire'));
    }
}
