<?php

use App\Assistant;
use App\Doctor;
use App\Group;
use App\Subject;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistrationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctors = Doctor::all()->toArray();

        $assistants = Assistant::all()->toArray();

        $groups = Group::all()->toArray();

        foreach (User::all() as $student)
        {
            foreach (Subject::all() as $subject)
            {
                DB::table('registrations')->insert([
                    'user_id' => $student->id,
                    'subject_id' => $subject->id,
                    'doctor_id' => array_random($doctors)['id'],
                    'assistant_id' => array_random($assistants)['id'],
                    'group_id' => array_random($groups)['id']
                ]);

//                $student->register($subject);
            }
        }
    }
}
