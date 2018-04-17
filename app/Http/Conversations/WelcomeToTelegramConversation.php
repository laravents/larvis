<?php

namespace App\Http\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class WelcomeToTelegramConversation extends Conversation
{
    public function startConversation()
    {
        $this->say('Hey!');
    }
    
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->startConversation();
    }
}
