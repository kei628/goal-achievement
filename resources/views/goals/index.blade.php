<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Calendar</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('/css/style.css/') }}" >
        <link rel="stylesheet" href="{{ asset('/css/responsive.css/') }}" >
    </head>
    <body>
        <x-app-layout>
        <x-slot name="header">
           goal　setting
        </x-slot>
            <div class=container>
                <br>
                @foreach($goals as $goal)
                <div class="box">
                    <p>
                        <h1 class='targetDate'>
                            <a href="/goals/{{ $goal->id }}">~{{ $goal->targetDate }}までのGoal~ <a>
                        </h1>
                        <h2 class='title'>{{ $goal->title }}</h2>
                        <h1 class='body'>{!! nl2br(htmlspecialchars($goal->body)) !!}</h1>
                        <div class='yoko'>
                            <div class="btn edit">
                                <a href="/goals/{{ $goal->id }}/edit">edit</a>
                            </div>
                            <form action="/goals/{{ $goal->id }}" id="form_{{ $goal->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <div class="btn delete"><button type="button" onclick="deleteGoal({{ $goal->id }})">delete</button>
                                <script>
                                    function deleteGoal(id) {
                                        'use strict'
                                        if (confirm('削除すると復元できません。\n本当に削除しますか？')){
                                            document.getElementById(`form_${id}`).submit();
                                            }
                                        }
                                </script>
                                </div>
                            </form>
                        </div>
                    </p>
                </div>
                <br>
                @endforeach
                <a class="btn create" href='/goals/create'>+create</a>
                <a class="btn back" href="/">back</a>
            </div>
        </x-app-layout>
    </body>
</html>
