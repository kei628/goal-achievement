<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Calendar</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <x-app-layout>
        <h1>Calendar</h1>
        <h1 class="day">
            {{ $calendar->day }}
        </h1>
        <h1 class="stamp">
            {{ $calendar->stamp }}
        </h1>
        <h1 class="body">
            {{ $calendar->body }}
        </h1>
        <h1 class="memo">
            {{ $calendar->memo }}
        </h1>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        </x-app-layout>
       
    </body>
</html>
