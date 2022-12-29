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
            <div class='container'>
                <br>
                <form action="/goals/{{ $goal->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="targetDate">
                        <h2>Target date</h2>
                        <input name='goal[targetDate]' value="{{ $goal->targetDate }}">
                    </div>
                    <div class="title">
                        <h2>Title</h2>
                        <input name='goal[title]' value="{{ $goal->title }}">
                    </div>
                    <div class="body">
                        <h2>Content</h2>
                        <input name='goal[body]' value="{{ $goal->body }}">
                    </div>
                    <div class="reward">
                        <h2>Reward</h2>
                        <input name='goal[reward]' value="{{ $goal->reward }}">
                    </div>
                    <div class="penalty">
                        <h2>Penalty</h2>
                        <input name='goal[penalty]' value="{{ $goal->penalty }}">
                    </div>
                    <br>
                    <div class="btn store">
                        <input type="submit" value="store"/>
                    </div>
                </form>
                <br>
                <a class="btn back" href="/">back</a>
            </div>
        </x-app-layout>
    </body>
</html>