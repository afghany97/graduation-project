<?php

use App\Manager;
use Illuminate\Database\Seeder;

class ManagersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('default.managers') as $manager)
        {
            $data = array_merge(['name' => $manager['name'] , 'email' => $manager['email'],'department_id' => $manager['department_id']], ['password' => bcrypt($manager['password'])]);

            Manager::create($data);
        }
    }
}
