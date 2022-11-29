<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Calendar</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('/css/modal.css/') }}" >



    </head>
    <body>
        <x-app-layout>
            <x-slot name="header">
            index
            </x-slot>
            <h1>Calendar</h1>
            <div class='goal'>
                <!--goalの表示-->
                <a href='/goals/index'>goal</a>
                @foreach($goals as $goal)
                <h1>{{ $goal->body }}</h1>
                @endforeach
            </div>
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
       <!-- Micromodal.js -->
        @include('calendars.modal')
    </body>
</html>
