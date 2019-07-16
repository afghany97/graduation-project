<?php

use App\Questionnaire;
use App\User;
use Illuminate\Database\Seeder;

class QuestionnairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $students = User::all();

        foreach ($students as $student)
        {
            foreach ($student->subjects as $subject)
            {

                $attributes = [];

                foreach (Questionnaire::attributes() as $attribute)
                {
                    $attributes[$attribute] = rand(1,5);
                }

                $attributes['doctor_id'] = $subject->pivot->doctor_id;
                $attributes['subject_id'] = $subject->id;
                $attributes['assistant_id'] = $subject->pivot->assistant_id;

                $student->questionnaires()->create(

                    $attributes

                );
            }
        }
    }
}
