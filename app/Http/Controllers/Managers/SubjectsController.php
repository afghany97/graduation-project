<?php

namespace App\Http\Controllers\Managers;

use App\Department;
use App\Doctor;
use App\Subject;
use App\Utilities\Classes\QuestionnaireEvaluation;

class SubjectsController extends ManagerController
{
    public function index(Department $department, Doctor $doctor)
    {
        $subjects = $doctor->subjects->unique();
        return view('managers.subjects.index', compact('subjects', 'doctor', 'department'));
    }

    public function show(Doctor $doctor, Subject $subject)
    {

        $evaluation = new QuestionnaireEvaluation($subject,$doctor->id);

        $categoriesRules = $evaluation->categoriesRules();

        return view('managers.subjects.show',compact('doctor','subject','categoriesRules'));
    }

}
