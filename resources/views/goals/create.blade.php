<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Goal</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <x-app-layout>
        <h1>Calendar</h1>
        <form action="/goals" method="POST">
        @csrf
        <div class="targetDate">
            <h2>target date</h2>
            <input name="goal[targetDate]" placeholder="達成目標日"/>
        </div>
        <div class="totle">
            <h2>title</h2>
            <input  name="goal[title]" placeholder="目標タイトル"/>
        </div>
        <div class="body">
            <h2>body</h2>
            <textarea name="goal[body]" placeholder="内容"/></textarea>
        </div>
        <div class="reward">
            <h2>reward</h2>
            <textarea name="goal[reward]" placeholder="ご褒美"></textarea>
        </div>
        <div class="penalty">
            <h2>penalty</h2>
            <textarea name="goal[penalty]" placeholder="罰"></textarea>
        </div>
        
       
        <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
        </x-app-layout>
       
    </body>
</html>
