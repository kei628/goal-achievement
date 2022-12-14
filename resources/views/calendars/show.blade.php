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
            <div class="container">
                <br>
                <div class="box">
                    <div class="stamp">
                        <h2><span class="under">Level of achievement</span></h2>
                        {{ $calendar->stamp }}
                    </div>
                    <div class="body">
                        <h2><span class="under">Things I have done</span></h2>
                        <p>{!! nl2br(htmlspecialchars($calendar->body)) !!}</p>
                    </div>
                    <div class="memo">
                        <h2><span class="under">Diary</span></h2>
                        <p>{!! nl2br(htmlspecialchars($calendar->memo)) !!}</p>
                    </div>
                    <div class="yoko">
                        <div class="btn edit"><a href="/calendars/{{ $calendar->id }}/edit">edit</a></div>
                        <form action="/calendars/{{ $calendar->id }}" id="form_{{ $calendar->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <div class="btn delete">
                                <button type="button" onclick="deleteCalendar({{ $calendar->id }})">delete</button></div>
                                <script>
                                    function deleteCalendar(id) {
                                        'use strict'
                                        if (confirm('削除すると復元できません。\n本当に削除しますか？')){
                                            document.getElementById(`form_${id}`).submit();
                                        }
                                    }
                                </script>
                        </form>
                    </div>
                </div>
                <br>
                 <a class="btn back" href="/">back</a>
            </div>
        </x-app-layout>
       
    </body>
</html>
