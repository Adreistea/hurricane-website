<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Hurricane Payments</title>
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body>
    <div id="app">
        <router-view></router-view>
        </div>
    </body>
</html>
