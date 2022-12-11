<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Calendar</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/style.css/') }}" >
        
    </head>
    <body>
        <x-app-layout>
            <div class="container">
                <br>
                <div class="stamp">
                    <h2><span class="under">Level of achievement</span></h2>
                    {{ $calendar->stamp }}
                </div>
                <div class="body">
                    <h2><span class="under">Things I have done</span></h2>
                    {{ $calendar->body }}
                </div>
                <div class="memo">
                    <h2><span class="under">memo</span></h2>
                    {{ $calendar->memo }}
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
                <a class="btn back" href="/">back</a>
        </x-app-layout>
       
    </body>
</html>
