<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/img/launch.png">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body data-site-lang="ru">
<div id="app" class="layout">
    @include('layouts.header')
    <div class="content">
        @yield('content')
    </div>
    @include('layouts.footer')
</div>

</body>
</html>
