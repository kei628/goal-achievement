<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Calendar</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <x-app-layout>
       <div class='content'>
           <form action="/goals/{{ $goal->id }}" method="POST">
               
           @csrf
           @method('PUT')
           <div class="targetDate">
            <h2>target date</h2>
            <input name='goal[targetDate]' value="{{ $goal->targetDate }}">
        </div>
        <div class="totle">
            <h2>title</h2>
            <input name='goal[title]' value="{{ $goal->title }}">
        </div>
        <div class="body">
            <h2>body</h2>
            <input name='goal[body]' value="{{ $goal->body }}">
        </div>
        <div class="reward">
            <h2>reward</h2>
            <input name='goal[reward]' value="{{ $goal->reward }}">
        </div>
        <div class="penalty">
            <h2>penalty</h2>
            <input name='goal[penalty]' value="{{ $goal->penalty }}">
        </div>
           <input type="submit" value="store"/>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
         </form>
        </x-app-layout>
       
    </body>
</html>
