<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Exhbition Network</title>
</head>
    <body>
        {{$event->email}}

        @component('mail::message')
            # Introduction

            As you requested us to promote your event. We are suggesting simple 7 question  segment to review your event with your prospective
            You can choose any five question to answer.

            @component('mail::button', ['url' => ''])
                Click
            @endcomponent

            Thanks,<br>
            {{ config('app.name') }}
        @endcomponent
    </body>
</html>