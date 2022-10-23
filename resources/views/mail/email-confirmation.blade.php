<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet"> 
    <style>
        .body{
            margin: 0;
            padding: 50px;
            font-family: Heebo, sans-serif;
            background: #101010;
            text-align: center;
            padding: 30px 10em;
        }

        .mail-body{
            background: #FFF;
            color: #696969;
            padding: 30px 50px;
        }

        .mail-confirm-button{
            color: #FFF !important;
            text-decoration: none;
            background: #A80A0A;
            padding: 10px 30px;
            display: inline-block;
            margin: 20px;
            border-radius: 5px;
        }

        .mail-footer{
            padding: 10px;
            font-size: 14px;
            color: #a6a6a6;
        }

        .mail-footer a{
            color: #e20f0f;
            text-decoration: none;
        }
        .mail-logo{
            padding: 30px;
        }
    </style>
</head>
<body>
    <div class="body">
        <div class="mail-logo"><img src="https://clawsandfins.com/images/logo.png" style="height: 150px"/></div>
        <div class="mail-body">
            <div style="text-align: left">
                <h3>Hey <strong>{{$name}}</strong>,</h3>
                <p>
                Thanks for registering for an account on Pete's Claws and Fins! Before we get started, we just need to confirm that this is you. Click below to verify your email address:<br>
                </p>
            </div>
            <a class="mail-confirm-button" href="{{$url}}">Confirm Email</a>
            <hr>
            <div style="text-align: left;font-size: 12px;">
                Need help? <a href="https://www.clawsandfins.com/contact-us">Contact our support team</a>
            </div>
        </div>
        <div class="mail-footer">
            Sent by Pete's Claws and Fins • <a href="https://www.clawsandfins.com/become-distributor">Become a distributor</a> • <a href="https://www.clawsandfins.com/become-investor">Become an investor</a>
        </div>
    </div>
</body>
</html>
