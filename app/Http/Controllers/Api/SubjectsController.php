<?php

namespace App\Http\Controllers\Api;

use App\Assistant;
use App\Doctor;

class SubjectsController extends ApiController
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
        $subjects = auth()->user()->subjects;

        foreach ($subjects as $key => $subject)

            if($subject->isQuestionnaired())

                $subjects->forget($key);


        foreach ($subjects as $subject)
        {
            $doctor = Doctor::find($subject->pivot->doctor_id);

            $assistant = Assistant::find($subject->pivot->assistant_id);

            $subject->doctor = $doctor;

            $subject->assistant = $assistant;
        }

        return $this->fetched(compact('subjects'));
    }

    public function show(Doctor $doctor)
    {
        $subjects = $doctor->subjects;

        foreach ($subjects as $key => $subject)

            if(!$subject->hasQuestionnaires())

                $subjects->forget($key);


        return $this->fetched(compact('subjects'));
    }

}
