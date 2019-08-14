<?php

namespace Tests\Unit\Student;

use App\Assistant;
use App\Department;
use App\Doctor;
use App\Questionnaire;
use App\Subject;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class QuestionnaireTest extends TestCase
{
    use DatabaseMigrations;

    protected function setUp()
    {
        parent::setUp();

        $this->department = create(Department::class);

        $this->student = create(User::class);

        $this->subject = create(Subject::class);

        $this->doctor = create(Doctor::class);

        $this->assistant = create(Assistant::class);
    }


    /** @test */

    public function authenticated_student_can_create_questionnaire_with_valid_data()
    {
        $this->signIn($this->student);

        $attributes = [];

        foreach (Questionnaire::attributesWithOutOthers() as $attribute){

            $attributes[$attribute] = rand(1,5);
        }

        $attributes = array_merge($attributes,['subject_id' => $this->subject->id,'doctor_id' => $this->doctor->id,'assistant_id' => $this->assistant->id]);

          $this->post(route('questionnaires.store',$this->subject),$attributes)

            ->assertStatus(302)

            ->assertSessionDoesntHaveErrors()

            ->assertSessionHas('flash','Subject Questionnaire Created Successfully');

        $this->assertDatabaseHas('questionnaires',['subject_id' => $this->subject->id]);

    }


    /** @test **/

    public function authenticated_student_can_not_create_questionnaire_with_invalid_data()
    {
        $this->signIn($this->student);

        $attributes = [];

        foreach (Questionnaire::attributesWithOutOthers() as $attribute){

            $attributes[$attribute] = str_random('10');
        }

        $attributes = array_merge($attributes,['subject_id' => $this->subject->id,'doctor_id' => $this->doctor->id,'assistant_id' => $this->assistant->id]);

        $this->post(route('questionnaires.store',$this->subject),$attributes)

            ->assertStatus(302)

            ->assertSessionHasErrors();

        $this->assertDatabaseMissing('questionnaires',['subject_id' => $this->subject->id]);

    }

    /** @test **/

    public function unauthenticated_student_can_not_create_questionnaire()
    {
        $attributes = [];

        foreach (Questionnaire::attributesWithOutOthers() as $attribute){

            $attributes[$attribute] = rand(1,5);
        }

        $attributes = array_merge($attributes,['subject_id' => $this->subject->id,'doctor_id' => $this->doctor->id,'assistant_id' => $this->assistant->id]);

        $this->post(route('questionnaires.store',$this->subject),$attributes)

            ->assertStatus(302)

            ->assertRedirect(route('login'));

        $this->assertDatabaseMissing('questionnaires',['subject_id' => $this->subject->id]);

    }

    /** @test **/

    public function can_not_duplicate_questionnaire_for_same_subject()
    {
        $this->signIn($this->student);

        $attributes = [];

        foreach (Questionnaire::attributesWithOutOthers() as $attribute){

            $attributes[$attribute] = rand(1,5);
        }

        $attributes = array_merge($attributes,['subject_id' => $this->subject->id,'doctor_id' => $this->doctor->id,'assistant_id' => $this->assistant->id]);

        $this->post(route('questionnaires.store',$this->subject),$attributes)

            ->assertStatus(302)

            ->assertSessionDoesntHaveErrors()

            ->assertSessionHas('flash','Subject Questionnaire Created Successfully');

        $this->assertDatabaseHas('questionnaires',['subject_id' => $this->subject->id]);


        $this->post(route('questionnaires.store',$this->subject),$attributes)

        ->assertStatus(302)

        ->assertSessionHasErrors();

        $this->assertCount(1,Questionnaire::all());

    }
}
