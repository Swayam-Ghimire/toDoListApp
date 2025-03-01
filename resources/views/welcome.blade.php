<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Getting Started</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-center px-8 py-12">
    <h1 class="text-4xl font-bold">Welcome To To-Do-list App</h1>
    <p>Organize your tasks, stay productive, and achieve your goals with ease.</p>
    <ul>
        <li>📝 Simple and intuitive task management</li>
        <li>🔒 Secure and private</li>
    </ul>
    <p>&copy; {{ date('Y') }} To-Do List App. All rights reserved.</p>
    @if(Auth::check())
        <a href="{{ route('test.home') }}" class="btn">View Tasks</a>
    @else
        <a href="{{ route('auth.register') }}" class="btn">Get Started</a>
    @endif
</body>
</html>