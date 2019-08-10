<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class CommandsController extends Controller
{
    public function execute($command)
    {
        set_time_limit(3000);

        ini_set('memory_limit','250M');

        $result = $exitCode = null;

        $output = [];

        switch (request('type')) {

            case 'artisan' :

                $result = Artisan::call($command,['name' => request('name')]);

                break;

            default :

                $result = exec($command,$output,$exitCode);
        }

        return compact('result','output','exitCode');
    }
}
