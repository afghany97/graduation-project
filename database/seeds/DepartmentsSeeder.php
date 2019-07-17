<?php

use App\Department;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('default.departments') as $department) {
            Department::create($department);
        }
    }
}
