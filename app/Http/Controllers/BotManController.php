<?php

namespace App\Http\Controllers;

use BotMan\BotMan\Middleware\ApiAi;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->listen();
    }
}
