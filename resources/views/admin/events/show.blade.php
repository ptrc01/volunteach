@extends('layout')

@section('content')
<div class="container my-5">
    <h1 class="text-center">Event Details</h1>

    <div class="card">
        <div class="card-header">
            <h2>{{ $event->name }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Date:</strong> {{ $event->date }}</p>
            <p><strong>Time:</strong> {{ $event->time }}</p>
            <p><strong>Location:</strong> {{ $event->location }}</p>
            <p><strong>Description:</strong></p>
            <p>{{ $event->description }}</p>
        </div>
    </div>

    <a href="{{ route('admin.events.index') }}" class="btn btn-secondary mt-3">Back to Events</a>
</div>
@endsection
