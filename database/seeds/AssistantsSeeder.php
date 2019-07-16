<?php

use App\Assistant;
use Illuminate\Database\Seeder;

class AssistantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('default.assistants') as $assistant)
        {
            Assistant::create($assistant);
        }
    }
}
