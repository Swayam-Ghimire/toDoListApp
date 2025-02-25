<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
            <li><a href="{{ route('test.home') }}">All tasks</a></li>
            <li><a href="{{ route('test.create') }} ">Create Tasks</a></li>
            {{-- <li><a href="/test/contact">Log out</a></li> --}}
        </ul>
    </nav>

    <div class="content">
        {{ $slot }}
    </div>
</body>
</html>