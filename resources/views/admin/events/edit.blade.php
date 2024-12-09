@extends('layout')

@section('content')
<div class="container my-5">
    <h1 class="text-center">Edit Event</h1>

    <form action="{{ route('admin.events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Event Name</label>
            <input type="text" name="name" class="form-control" value="{{ $event->name }}" required>
        </div>
        <div class="mb-3">
            <label for="location">Location</label>
            <input type="text" name="location" class="form-control" value="{{ $event->location }}" required>
        </div>
        <div class="mb-3">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" value="{{ $event->date }}" required>
        </div>
        <div class="mb-3">
            <label for="time">Time</label>
            <input type="time" name="time" class="form-control" value="{{ $event->time }}" required>
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $event->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
