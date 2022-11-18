<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Calendar</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <x-app-layout>
        <h1>Calendar</h1>
        <x-slot name="header">
            index
        </x-slot>
        <div id='calendar'></div>
        <div class='calendar'>
            <a href='/calendars/create'>create</a>
            @foreach ($calendars as $calendar)
            
            <h2 class='day'><a href="/calendars/{{ $calendar->id }}">{{ $calendar->day }}</a></h2>
            <h1 class='stamp'>{{ $calendar->stamp }}</h1>
            <h2 class='body'>{{ $calendar->body }}</h2>
            <h2 class='memo'>{{ $calendar->memo }}</h2>
            @endforeach
        </div>
        </x-app-layout>
       
    </body>
</html>
