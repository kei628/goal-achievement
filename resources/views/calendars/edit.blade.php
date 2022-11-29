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
            <form action="/calendars/{{ $calendar->id }}" method="POST">
                @csrf
                @method('PUT')
                <h1>Calendar</h1>
                <h1 class="stamp">
                <select name="calendar[stamp]">
                    <option value="○">○</option>
                    <option value="△">△</option>
                    <option value="×">×</option>
                </select>
                </h1>
                <h1 class="body">
                    <input name='calendar[body]' value="{{ $calendar->body }}">
                </h1>
                <h1 class="memo">
                    <input name='calendar[memo]' value="{{ $calendar->memo }}">
                </h1>
                <div class="footer">
                    <input type="submit" value="store"/>
                    <a href="/">戻る</a>
                </div>
        </x-app-layout>
       
    </body>
</html>
