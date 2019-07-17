<?php

use App\Department;
use App\Assistant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DepartmentAssistantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = Department::all()->toArray();
        $assistants = Assistant::all();
        foreach ($assistants as $assistant) {
            DB::table('department_assistant')->insert(['assistant_id' => $assistant->id, 'department_id' => array_random($departments)['id']]);
        }
    }
}
