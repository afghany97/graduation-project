<?php

namespace App\Http\Controllers;

use App\Assistant;
use App\Doctor;
use App\Group;
use App\Http\Requests\Api\QuestionnairesRequest;
use App\Http\Requests\CreateQuestionnaireRequest;
use App\Questionnaire;
use App\Subject;
use Illuminate\Support\Facades\DB;

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
        $row = Db::table('registrations')->where('user_id',auth()->id())->where('subject_id',$subject->id)->first();

        $doctor = Doctor::find($row->doctor_id);

        $assistant = Assistant::find($row->assistant_id);

        $group = Group::find($row->group_id);

        return view('questionnaires.create', compact('subject', 'doctor','assistant','group'));
    }

    /**
     * @param Subject $subject
     * @param CreateQuestionnaireRequest $formRequest
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Subject $subject, CreateQuestionnaireRequest $formRequest)
    {
        $attributes = array_merge(['subject_id','doctor_id','assistant_id'], Questionnaire::attributes());

        $questionnaire = auth()->user()->questionnaires()->create(

            dataFromRequest($attributes)

        );

        flash()->success("Questionnaire");

        return redirect()->route('home');

    }
}
