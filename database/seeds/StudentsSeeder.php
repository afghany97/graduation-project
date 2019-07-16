<?php

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
        foreach (config('default.students') as $student)
        {
            $data = array_merge(['c_id' => $student['c_id']],['password' => bcrypt($student['password'])]);

            User::create($data);
        }
    }
}
