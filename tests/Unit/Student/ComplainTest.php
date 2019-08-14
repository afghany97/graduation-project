<?php

namespace Tests\Unit\Student;

use App\Complain;
use App\Department;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ComplainTest extends TestCase
{
    use DatabaseMigrations;

    protected function setUp()
    {
        parent::setUp();

        $this->department = create(Department::class);

        $this->student = create(User::class);

    }

    /** @test **/

    public function authenticated_user_can_create_complain_with_valid_data()
    {
        $this->signIn($this->student);

        $data = raw(Complain::class,['user_id' => $this->student->id]);

        $this->post(route('complains.store'),$data)

            ->assertStatus(302)

            ->assertSessionDoesntHaveErrors()

            ->assertSessionHas('flash','Complain Created Successfully');

        $this->assertDatabaseHas('complains',['user_id' => $this->student->id]); // issue here
    }

    /** @test **/

    public function authenticated_user_can_not_create_complain_with_invalid_data()
    {
        $this->signIn($this->student);

        $data = [];

        $this->post(route('complains.store'),$data)

            ->assertStatus(302)

            ->assertSessionHasErrors();

        $this->assertDatabaseMissing('complains',['user_id' => $this->student->id]); // issue here

        $this->assertCount(0,Complain::all());
    }

    /** @test **/

    public function unauthenticated_user_can_not_create_complain()
    {
        $data = raw(Complain::class,['user_id' => $this->student->id]);

        $this->post(route('complains.store'),$data)

            ->assertStatus(302)

            ->assertRedirect(route('login'));

        $this->assertCount(0,Complain::all());

    }

}
