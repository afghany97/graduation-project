<?php

namespace App\Http\Controllers\Api;

use App\Doctor;
use App\Http\Requests\Api\SubjectsRequest;
use App\Subject;
use Illuminate\Support\Facades\Auth;

class SubjectsController extends ApiController
{
    /**
     * QuestionnairesController constructor.
     */

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(Doctor $doctor = null)
    {
        $subjects = $this->getSubjects($doctor);

        return $this->fetched(compact('subjects'));
    }

    public function show(Subject $subject)
    {
        return $this->fetched(compact('subject'));
    }

    public function update(Doctor $doctor, Subject $subject, SubjectsRequest $subjectsRequest)
    {
        $subject = $doctor->subjects()->where('subject_id', $subject->id)->update(
            dataFromRequest([
                'name',
                'code',
                'units',
            ])
        );

        return $this->updated(compact('subject'));
    }

    public function store(Doctor $doctor, SubjectsRequest $subjectsRequest)
    {
        $subject = $doctor->subjects()->create(
            dataFromRequest([
                'name',
                'code',
                'units',
            ])
        );

        return $this->created(compact('subject'));
    }

    /**
     * @param Doctor $doctor
     * @return mixed
     */
    public function getSubjects(Doctor $doctor = null)
    {
        return $subjects = $doctor ? $doctor->subjects : Subject::all();
    }


}
