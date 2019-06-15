<?php

namespace App\Http\Controllers\Api;

use App\Doctor;
use App\Http\Requests\Api\SubjectsRequest;
use App\Subject;
use App\User;
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

    public function store(SubjectsRequest $request)
    {
        $subject = Subject::create(
            dataFromRequest([
                'name', 'code', 'units'
            ])
        );

        return $this->created(compact('subject'));
    }

    public function index()
    {
        $subjects = Subject::all();

        return $this->fetched(compact('subjects'));
    }

    public function getdoctorsubject(Doctor $doctor = null)
    {
        $subjects = $this->getSubjects($doctor);

        return $this->fetched(compact('subjects'));
    }

    public function getUserSubject(User $user = null)
    {
        $subjects = $this->getSubjectUser($user);
        return $this->fetched(compact('subjects'));
    }

    public function show(Subject $subject)
    {
        return $this->fetched(compact('subject'));
    }

    public function update(Subject $subject, SubjectsRequest $subjectsRequest)
    {
        $subject = $subject->where('id', $subject->id)->update(
            dataFromRequest([
                'name',
                'code',
                'units',
            ])
        );

        return $this->updated(compact('subject'));
    }

    public function storesubject(Doctor $doctor, SubjectsRequest $subjectsRequest)
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

    public function getSubjectUser(User $user = null)
    {
        return $subjects = $user ? $user->subjects : Subject::all();
    }


}
