<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Calendar</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/style.css/') }}" >
        .compute-1.amazonaws.com:5432/df0seitk24hkb5levtech_kei:~/environment/goal-achievement (master) $ heroku config:set DB_HOST=ec2-54-86-224-85

    </head>
    <body>
        <x-app-layout>
            <div class=container>
                <form action="/calendars/{{ $calendar->id }}" method="POST">
                    @csrf
                    @method('PUT')
                   <div class="stamp">
                        <h2>Level of achievement</h2>
                        <select name="calendar[stamp]">
                            <option value="〇">〇</option>
                            <option value="△">△</option>
                            <option value="✕">✕</option>
                        </select>
                    </div>
                    <div class="body">
                        <h2>body</h2>
                        <input name='calendar[body]' value="{{ $calendar->body }}">
                    </div>
                    <div class="memo">
                        <h2>memo</h2>
                        <input name='calendar[memo]' value="{{ $calendar->memo }}">
                    </div>
                    <br>
                    <div class="btn store">
                        <input type="submit" value="store"/>
                    </div>
                </form>
                <br>
                <a class="btn back" href="/calendars/{{ $calendar->id }}">back</a>
            </div>
        </x-app-layout>
       
    </body>
</html>
