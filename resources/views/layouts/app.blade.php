<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> - Posty</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">
<nav class="p-6 bg-white flex justify-between mb-6">
    {{--    navbar--}}
    <ul class="flex item-center">
        <li>
            <a href="" class="p-3">Home</a>
        </li>
        <li>
            <a href="" class="p-3">Dashboard</a>
        </li>
        <li>
            <a href="" class="p-3">Posts</a>
        </li>
    </ul>

    {{--    user action--}}
    <ul class="flex item-center">
        <li>
            <a href="" class="p-3">User</a>
        </li>
        <li>
            <a href="" class="p-3">Login</a>
        </li>
        <li>
            <a href="" class="p-3">Register</a>
        </li>
        <li>
            <a href="" class="p-3">Logout</a>
        </li>
    </ul>
</nav>
@yield('content')
</body>
</html>
