<?php

namespace App\Http\Controllers\Api;

use App\Doctor;
use App\Http\Requests\Api\DoctorsRequest;
use App\Subject;
use Illuminate\Support\Facades\Auth;

class DoctorsController extends ApiController
{
    /**
     * QuestionnairesController constructor.
     */

//    public function __construct()
//    {
//        $this->middleware('auth:api');
//    }

    public function index()
    {
        $doctors = Doctor::all();

        return $this->fetched(compact('doctors'));
    }

    public function show(Doctor $doctor)
    {
        return $this->fetched(compact('doctor'));
    }

    public function store(DoctorsRequest $doctorsRequest)
    {
        $doctor = Doctor::create(
            dataFromRequest([
                'name',
            ])
        );

        return $this->created(compact('doctor'));
    }

    public function update(Doctor $doctor, DoctorsRequest $doctorsRequest)
    {
        $doctor = $doctor->update(
            dataFromRequest([
                'name',
            ])
        );

        return $this->updated(compact('doctor'));
    }


}
