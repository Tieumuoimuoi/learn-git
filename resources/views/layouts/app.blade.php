<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            /* Add your own styles here */
        </style>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        <div class="container text-center">
            <h1>{{ __('sunshine.welcome') }}</h1>
        </div>
    </body>
</html>
