<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Calendar</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/style.css/') }}" >
        <link rel="stylesheet" href="{{ asset('/css/responsive.css/') }}" >
    </head>
    <body>
        <x-app-layout>
            <div class=container>
                <br>
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
                        <h2>Things I have done</h2>
                        <textarea name="calendar[body]" placeholder="今日したこと">{!! nl2br(htmlspecialchars($calendar->body)) !!}</textarea>
                    </div>
                    <div class="memo">
                        <h2>Diary</h2>
                        <textarea name="calendar[memo]" placeholder="日記">{!! nl2br(htmlspecialchars($calendar->memo)) !!}</textarea>
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
