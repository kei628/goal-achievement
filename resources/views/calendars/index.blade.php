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
            Calendar
            </x-slot>
            <div class=container>
                <br>
                <div class='top-wrapper'>
                    <!--目標の表示-->
                    <span class="under">~{{ $goal->targetDate }}までの目標~</span>
                    <h1><span class="under">{{ $goal->title}}</span></h1>
                </div>
                <br>
                <div id='calendar'>
                </div>
                <div class="footer">
                </div>
            </div>
        </x-app-layout>
       <!-- Micromodal.js -->
        @include('calendars.modal')
    </body>
</html>
