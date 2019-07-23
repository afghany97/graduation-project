<?php

use App\Department;
use App\User;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $departments = Department::all()->toArray();

        foreach (config('default.students') as $student)
        {
            $data = array_merge(

                [
                    'c_id' => $student['c_id'],

                    'department_id' => array_random($departments)['id'],

                    'name' => $student['name'],

                    'gpa' => $student['gpa']

                ],

                [
                    'password' => bcrypt($student['password'])

                ]

            );

            User::create($data);
        }
    }
}
