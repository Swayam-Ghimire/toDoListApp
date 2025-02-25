<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        @vite('resources/css/app.css')

    </head>
    <body class="text-center px-8 py-12">
        <h1 class="text-4xl font-bold">Welcome to Laravel</h1>
        <p>Hello this is welcome page which is navigated from routes after starting the server.</p>
        <a href="/test" class="btn">Navigate to Home page</a>
    </body>
</html>
