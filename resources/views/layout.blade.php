<!DOCTYPE html>

<html>

<head>

    <title>@yield('title', 'Site for Cool Dudes')</title>
    <style type="text/css">
        .is-complete {
            text-decoration: line-through
        }
    </style>

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