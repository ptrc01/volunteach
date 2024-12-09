@extends('layout')

@section('content')
<div class="container my-5">
    <div class="mb-4">
        <a href="{{route('admin.dashboard') }}" class="btn btn-secondary">
            Back
        </a>
    </div>

    <h1 class="text-center">Edit Event</h1>

    <form action="{{ route('event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
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
        <div class="mb-3">
            <label for="additional_info">Additional Information</label>
            <textarea class="form-control" id="additional_info" name="additional_info">{{$event->additional_info}}</textarea>
        </div>
        <div class="mb-3">
            <label for="image">Cover Photo</label>
            <input type="file" name="image" id="image" class="form-control">
            <img src="{{ asset('storage/images/'.$event->image) }}" alt="" width="150px">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
