<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
{{--                {{ $slot }}--}}
            </div>
        </div>
        <h1>Welcome to the Auction Site</h1>
        <p>This is a place where you can browse auctions, submit bids, and more!</p>

        <h2>Register or Sign In</h2>
        <ul>
            <li><a href="{{ route('register') }}">Register as a Customer</a></li>
            <li><a href="{{ route('register') }}">Register as an Agent</a></li>
            <li><a href="{{ route('login') }}">Sign In</a></li>
        </ul>

        <h2>Browse Auctions</h2>
        <ul>
            <li><a href="{{ route('/auctions.index') }}">View All Auctions</a></li>
            <li><a href="{{ route('/auctions.create') }}">Create an Auction (Agents Only)</a></li>
        </ul>
    </body>
</html>

