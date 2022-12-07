<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Goal</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/style.css/') }}" >

    </head>
    <x-app-layout>
    <body>
        <div class=container>
        <form action="/goals" method="POST">
        @csrf
         <div class="targetDate">
            <h2>target date</h2>
            {{ $goal->targetDate }}
        </div>
        <div class="title">
            <h2>goal</h2>
            {{ $goal->title }}
        </div>
        <div class="body">
            <h2>body</h2>
            {{ $goal->body }}
        </div>
        <div class="reward">
            <h2>reward</h2>
            {{ $goal->reward }}
        </div>
        <div class="penalty">
            <h2>penalty</h2>
            {{ $goal->penalty }}
        </div>
        <div class="flex">
        <div class="btn edit"><a href="/goals/{{ $goal->id }}/edit">edit</a></div>
        <form action="/goals/{{ $goal->id }}" id="form_{{ $goal->id }}" method="post">
                @csrf
                @method('DELETE')
                <div class="btn delete">
                <button type="button" onclick="deleteGoal({{ $goal->id }})">delete</button></div>
                <script>
                    function deleteGoal(id) {
                        'use strict'
                        
                        if (confirm('削除すると復元できません。\n本当に削除しますか？')){
                            document.getElementById(`form_${id}`).submit();
                        }
                    }
                </script>
            </form>
        <div class="btn store">
        <input type="submit" value="store"/></div>
        </div>
            <a class="btn back" href="/">back</a>
    </div>
    </body>
    </x-app-layout>
</html>
