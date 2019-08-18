<?php

namespace App\Http\Controllers\Api\Managers;

use App\Doctor;
use App\Subject;
use App\Utilities\Classes\QuestionnaireEvaluation;

class SubjectsController extends ManagersApiController
{
    public function index(Doctor $doctor)
    {
        $subjects = $doctor->subjects->unique();

        foreach ($subjects as $subject){

            $subject->avg = $subject->getAverageEvaluation($doctor->id);
        }

        return $this->fetched(compact('subjects','doctor'));
    }

    public function show(Doctor $doctor,Subject $subject)
    {
        $evaluation = new QuestionnaireEvaluation($subject,$doctor->id);

        $categoriesRules = $evaluation->categoriesRules();

        return $this->fetched(compact('doctor','subject','categoriesRules'));
    }
}
