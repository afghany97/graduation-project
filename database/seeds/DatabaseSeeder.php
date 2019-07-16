<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $seeders = [
        AssistantsSeeder::class,
        DoctorsSeeder::class,
        GroupsSeeder::class,
        StudentsSeeder::class,
        SubjectsSeeder::class,
        RegistrationsSeeder::class,
        QuestionnairesSeeder::class
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */


    public function run()
    {
        foreach ($this->seeders as $seeder)
        {
            $this->call($seeder);
        }
    }
}
