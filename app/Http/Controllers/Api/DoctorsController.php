<?php

namespace App\Http\Controllers\Api;

use App\converters\DoctorsConverter;
use App\Department;
use App\Doctor;

class DoctorsController extends ApiController
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
        $doctors = Doctor::all();

        return $this->fetched(compact('doctors'));
    }

    public function show(Department $department,DoctorsConverter $converter)
    {
        $doctors = $department->doctors;

        $doctors = $converter->convertCollections($doctors);

        return $this->fetched(compact('doctors'));
    }

}
