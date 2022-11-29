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
        <h1>目標</h1>
        
        <x-slot name="header">
           goal
        </x-slot>
        
        <div class='goal'>
            <a href='/goals/create'>create</a>
            @foreach($goals as $goal)
            <h2 class='targetDate'>
                <a href="/goals/{{ $goal->id }}">{{ $goal->targetDate }}</a>
            </h2>
            <h1 class='title'>{{ $goal->title }}</h1>
            <h2 class='body'>{{ $goal->body }}</h2>
            <h2 class='reward'>{{ $goal->reward }}</h2>
            <h2 class='penalty'>{{ $goal->penalty }}</h2>
            <form action="/goals/{{ $goal->id }}" id="form_{{ $goal->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deleteGoal({{ $goal->id }})">delete</button>
            @endforeach
                <script>
                    function deleteGoal(id) {
                        'use strict'
                        
                        if (confirm('削除すると復元できません。\n本当に削除しますか？')){
                            document.getElementById(`form_${id}`).submit();
                        }
                    }
                </script>
            </form>
             <div class="footer">
            <a href="/">戻る</a>
        </div>
        </x-app-layout>
       
    </body>
</html>
