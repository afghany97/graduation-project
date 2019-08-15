<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\QuestionnairesRequest;
use App\Questionnaire;
use App\Subject;
use App\Utilities\Classes\QuestionnaireEvaluation;

class QuestionnairesController extends ApiController
{
    /**
     * QuestionnairesController constructor.
     */

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function show(Subject $subject)
    {
        $evaluation = new QuestionnaireEvaluation($subject);

        $questionnaires = $evaluation->calculate();

        return $this->fetched(compact('questionnaires'));
    }

    public function store(QuestionnairesRequest $questionnairesRequest)
    {
        $subject = Subject::find(request('subject_id'));

        if($subject->isQuestionnaired())

            return $this->setStatus(400)->responseWithError(['message' => 'this subject was questionnaired before']);

        $attributes = array_merge(['subject_id','doctor_id','assistant_id'], Questionnaire::attributes());

        $questionnaire = auth()->user()->questionnaires()->create(

            dataFromRequest($attributes)

        );

        return $this->created(compact('questionnaire'));
    }
}
