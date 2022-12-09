<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Calendar</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('/css/style.css/') }}" >
    </head>
    <body>
        <x-app-layout>
        <x-slot name="header">
           goal　setting
        </x-slot>
            <div class=container>
                <br>
                @foreach($goals as $goal)
                    <h2 class='targetDate'>
                        <a href="/goals/{{ $goal->id }}">~{{ $goal->targetDate }}までの目標~ <a>
                    </h2>
                    <h1 class='title'>{{ $goal->title }}</h1>
                    <h2 class='body'>{{ $goal->body }}</h2>
                    <h2>reward</h2>
                    <h2 class='reward'>{{ $goal->reward }}</h2>
                    <h2>penalty</h2>
                    <h2 class='penalty'>{{ $goal->penalty }}</h2>
                    <div class='yoko'>
                        <div class="btn edit">
                            <a href="/goals/{{ $goal->id }}/edit">edit</a>
                        </div>
                        <form action="/goals/{{ $goal->id }}" id="form_{{ $goal->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="btn delete">
                                <button type="button" onclick="deleteGoal ({{ $goal->id }})">delete</button>
                            </div></div>
                            <script>
                                function deleteGoal(id) {
                                    'use strict'
                                    if (confirm('削除すると復元できません。\n本当に削除しますか？')){
                                        document.getElementById(`form_${id}`).submit();
                                        }
                                    }
                            </script>
                        </form>
                @endforeach
                <a class="btn create" href='/goals/create'>+create</a>
                <a class="btn back" href="/">back</a>
            </div>
        </x-app-layout>
    </body>
</html>
