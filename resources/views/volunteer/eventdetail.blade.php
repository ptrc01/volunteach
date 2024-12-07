<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $event->name }}</title>
</head>
<body>
    <h1>{{ $event->name }}</h1>
    <p>{{ $event->description }}</p>
    <p><strong>Location:</strong> {{ $event->location }}</p>
    <p><strong>Start Date:</strong> {{ $event->start_date }}</p>
    <p><strong>Time:</strong> {{ $event->time}}</p>

    <form action="{{ route('events.markah', $event->id) }}" method="POST">
        @csrf
        <button type="submit">Bookmark</button>
    </form>

    <form action="{{ route('events.register', $event->id) }}" method="GET">
        <button type="submit">Register</button>
    </form>
</body>
</html>
