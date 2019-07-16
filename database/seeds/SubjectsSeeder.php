<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('default.subjects') as $subject)
        {
            Subject::create($subject);
        }
    }
}
