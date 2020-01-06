<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta')
    <title>@yield('title')</title>
</head>
<body>
    <header></header>
    @yield('sidebar_left')

    @yield('content')

    @yield('sidebar_right')
    <footer></footer>
</body>
</html>