<p align="center"><img height="188" width="198" src="https://larvis.laravents.com/robot.png"></p>
<h1 align="center">Larvis</h1>

## About Larvis

Larvis is a chatbot built with [BotMan](https://botman.io), an framework agnostic Chatbot-Framework.
The bot helps you on the website (using the widget) or telegram to find laravel related events.


## Telegram

Larvis is also available on telegram: [https://t.me/larvis_bot](https://t.me/larvis_bot)

## How to implement the widget

```html
<script>
    var botmanWidget = {
        frameEndpoint: 'https://larvis.laravents.com/botman/widget',
        chatServer: 'https://larvis.laravents.com/botman',
        mainColor: '#ffffff',
        bubbleBackground: '#ffffff',
        title: 'Larvis',
        bubbleAvatarUrl: 'https://larvis.laravents.com/robot.png',
        desktopHeight: 600,
        introMessage: 'Welcome to laravents.com! 👋 <br><br> I´m Larvis. Your personal 🤖 when it comes to any laravel related events on the 🌍. <br><br> Here´s a 📝 with commands, i understand: <br><br> - Show me conferences <br> - Show me meetups <br> - Show me hackathons',
        placeholderText: 'Ask me about any events for laravel..',
        aboutLink: 'https://github.com/laravents/larvis'
    };
</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
```

## Security Vulnerabilities

If you discover a security vulnerability within BotMan or BotMan Studio, please send an e-mail to Florian Wartner at florian@laravents.com. All security vulnerabilities will be promptly addressed.

## License

Larvis & BotMan are free software distributed under the terms of the MIT license.

