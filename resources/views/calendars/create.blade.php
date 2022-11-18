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
        <h1>Calendar</h1>
        <form action="/calendars" method="POST">
        @csrf
        <div class="day">
            <h2>day</h2>
            <input name="calendar[day]" placeholder="日付"/>
        </div>
        <div class="stamp">
            <h2>stamp</h2>
            <input  name="calendar[stamp]" placeholder="スタンプ"/>
        </div>
        <div class="body">
            <h2>body</h2>
            <textarea name="calendar[body]" placeholder="目標"/></textarea>
        </div>
        <div class="memo">
            <h2>memo</h2>
            <textarea name="calendar[memo]" placeholder="今日したこと"></textarea>
        </div>
       
        <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
        </x-app-layout>
       
    </body>
</html>
