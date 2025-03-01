<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body>
    @if (session('success'))
    <div class="bg-green-100 px-4 py-2">
        {{ session('success') }}
    </div>
    @endif
    <nav>
        <h1>To-Do List App</h1>
        <ul>
            @guest
                <li><a href="{{ route('auth.login') }}">Log in</a></li>
                <li><a href="{{ route('auth.register') }}">Register</a></li>
            @endguest
            @auth
                <span class="border-r-2 pr-2">
                    Hi {{ Auth::user()->first }}
                </span>
                <li><a href="{{ route('test.home') }}">All tasks</a></li>
                <li><a href="{{ route('test.create') }} ">Create Tasks</a></li>
            @endauth
        </ul>
                
    </nav>

    <div class="content">
        {{ $slot }}
        @auth
            <form action="{{ route('auth.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn">Log out</button>
            </form>
        @endauth
    </div>
</body>
</html>