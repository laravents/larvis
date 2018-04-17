<?php

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Middleware\ApiAi;
use Carbon\Carbon;

$botman = resolve('botman');
$dialogflow = ApiAi::create(env('DIALOG_FLOW_KEY'))->listenForAction();
$botman->middleware->received($dialogflow);

$botman->hears('smalltalk.*', function (BotMan $bot) {
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    $apiAction = $extras['apiAction'];
    $apiIntent = $extras['apiIntent'];

    $bot->reply($apiReply);
})->middleware($dialogflow);

$botman->hears('date.year.get', function (BotMan $bot) {
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    $apiAction = $extras['apiAction'];
    $apiIntent = $extras['apiIntent'];

    $currentYear = Carbon::now()->year;

    $bot->reply($apiReply . " $currentYear");
})->middleware($dialogflow);

$botman->listen();