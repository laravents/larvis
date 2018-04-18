<?php

use Carbon\Carbon;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Middleware\ApiAi;

$botman = resolve('botman');
$dialogflow = ApiAi::create(env('DIALOG_FLOW_KEY'))->listenForAction();
$botman->middleware->received($dialogflow);

$botman->group(['driver' => \BotMan\Drivers\Telegram\TelegramDriver::class], function ($bot) use ($botman, $dialogflow) {
    $botman->hears('/start', function (BotMan $bot) {
        $bot->typesAndWaits(2);
        $bot->startConversation(new \App\Http\Conversations\WelcomeToTelegramConversation);
    });

    $botman->hears('smalltalk.*', function (BotMan $bot) {
        $extras = $bot->getMessage()->getExtras();
        $apiReply = $extras['apiReply'];
        $apiAction = $extras['apiAction'];
        $apiIntent = $extras['apiIntent'];

        $bot->typesAndWaits(2);
        $bot->reply($apiReply);
    })->middleware($dialogflow);

    $botman->hears('date.year.get', function (BotMan $bot) {
        $extras = $bot->getMessage()->getExtras();
        $apiReply = $extras['apiReply'];
        $apiAction = $extras['apiAction'];
        $apiIntent = $extras['apiIntent'];

        $currentYear = Carbon::now()->year;

        $bot->typesAndWaits(2);
        $bot->reply($apiReply." $currentYear");
    })->middleware($dialogflow);

    $botman->hears('conferences.show', function (BotMan $bot) {
        $extras = $bot->getMessage()->getExtras();
        $apiReply = $extras['apiReply'];
        $apiAction = $extras['apiAction'];
        $apiIntent = $extras['apiIntent'];

        $bot->typesAndWaits(2);
        $bot->reply($apiReply);
    })->middleware($dialogflow);
});

$botman->group(['driver' => \BotMan\Drivers\Slack\SlackDriver::class], function ($bot) use ($botman, $dialogflow) {
    $botman->hears('smalltalk.*', function (BotMan $bot) {
        $extras = $bot->getMessage()->getExtras();
        $apiReply = $extras['apiReply'];
        $apiAction = $extras['apiAction'];
        $apiIntent = $extras['apiIntent'];

        $bot->typesAndWaits(2);
        $bot->reply($apiReply);
    })->middleware($dialogflow);

    $botman->hears('date.year.get', function (BotMan $bot) {
        $extras = $bot->getMessage()->getExtras();
        $apiReply = $extras['apiReply'];
        $apiAction = $extras['apiAction'];
        $apiIntent = $extras['apiIntent'];

        $currentYear = Carbon::now()->year;

        $bot->typesAndWaits(2);
        $bot->reply($apiReply." $currentYear");
    })->middleware($dialogflow);

    $botman->hears('conferences.show', function (BotMan $bot) {
        $extras = $bot->getMessage()->getExtras();
        $apiReply = $extras['apiReply'];
        $apiAction = $extras['apiAction'];
        $apiIntent = $extras['apiIntent'];

        $bot->typesAndWaits(2);
        $bot->reply($apiReply);
    })->middleware($dialogflow);
});

$botman->group(['driver' => \BotMan\Drivers\Web\WebDriver::class], function ($bot) use ($botman, $dialogflow) {
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

        $bot->reply($apiReply." $currentYear");
    })->middleware($dialogflow);

    $botman->hears('conferences.show', function (BotMan $bot) {
        $extras = $bot->getMessage()->getExtras();
        $apiReply = $extras['apiReply'];
        $apiAction = $extras['apiAction'];
        $apiIntent = $extras['apiIntent'];

        $bot->reply($apiReply);
    })->middleware($dialogflow);
});
