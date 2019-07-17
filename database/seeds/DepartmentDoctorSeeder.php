<?php

use App\Department;
use App\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DepartmentDoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = Department::all()->toArray();
        $doctors = Doctor::all();
        foreach ($doctors as $doctor) {
            DB::table('department_doctor')->insert(['doctor_id' => $doctor->id, 'department_id' => array_random($departments)['id']]);
        }
    }
}
