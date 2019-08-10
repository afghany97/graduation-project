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
            $data = array_merge(['name' => $manager['name'] , 'c_id' => $manager['c_id'],'department_id' => $manager['department_id'] ,'role' => $manager
            ['role']], ['password' => bcrypt($manager['password'])]);

            Manager::create($data);
        }
    }
}
