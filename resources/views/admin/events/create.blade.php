@extends('layout')

@section('content')
<div class="container my-5">
    <h1 class="text-center">Create Event</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.events.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name">Event Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="location">Location</label>
            <input type="text" name="location" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="time">Time</label>
            <input type="time" name="time" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

</div>
@endsection
