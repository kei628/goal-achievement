<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Calendar</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/responsive.css/') }}" >
    </head>
    <body>
        <x-app-layout>
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
            <textarea name="calendar[body]" placeholder="今日したこと"/></textarea>
        </div>
        <div class="memo">
            <h2>memo</h2>
            <textarea name="calendar[memo]" placeholder="日記"></textarea>
        </div>
        </form>
        <div class="btn">
        <div class="store">
            <input type="submit" value="store"/>
        </div>
            <a class="back" href="/">back</a>
        </div>
        
        </x-app-layout>
       
    </body>
</html>
