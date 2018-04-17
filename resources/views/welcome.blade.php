<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="slack-app-id" content="AA7BTF080">
    <title>Larvis</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        body {
            font-family: "Varela Round", sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .content {
            text-align: center;
        }

        .logo {
            margin: 0 auto;
            margin-bottom: 20px;
        }

        .links a {
            font-size: 1.25rem;
            text-decoration: none;
            color: #e66c61;
            margin: 10px;
        }

        @media all and (max-width: 500px) {

            .links {
                display: flex;
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="logo">
            <img src="{{ asset('robot.png') }}" alt="Larvis">
        </div>

        <div class="links">
            <a href="https://laravents.com" target="_blank">Laravents.com</a>
            <a href="https://github.com/laravents/larvis" target="_blank">GitHub</a>
            <a href="https://twitter.com/laraventscom" target="_blank">Twitter</a>
        </div>
        <br>
        <a href="https://slack.com/oauth/authorize?client_id=348096430082.347401510272&scope=bot"><img alt="Add to Slack" height="40" width="139" src="https://platform.slack-edge.com/img/add_to_slack.png" srcset="https://platform.slack-edge.com/img/add_to_slack.png 1x, https://platform.slack-edge.com/img/add_to_slack@2x.png 2x" /></a>
    </div>
</div>
</body>
</html>