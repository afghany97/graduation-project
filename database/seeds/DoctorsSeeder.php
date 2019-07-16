<?php

use App\Doctor;
use Illuminate\Database\Seeder;

class DoctorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('default.doctors') as $doctor)
        {
            Doctor::create($doctor);
        }
    }
}
