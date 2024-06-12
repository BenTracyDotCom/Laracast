<!DOCTYPE html>

<html>

<head>

    <title>@yield('title', 'Site for Cool Dudes')</title>

</head>

<body>

    <ul>
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="/contact">Contact</a> us to learn more.
        </li>
        <li>
            <a href="/about">About Us</a>
        </li>
    </ul>
    @yield('content')

</body>