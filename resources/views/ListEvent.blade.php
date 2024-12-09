@extends('layout')

@section('title', 'Volunteer Opportunities')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Volunteer Opportunities</h1>
    <div class="row">

        <!-- Search event -->
    <form method="GET" action="{{ route('event.list') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search for events" value="{{ request()->query('search') }}">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>
        @foreach($events as $event)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm w-100 h-100">
                <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top"alt="{{ $event->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $event->name }}</h5>
                    <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                    <p><strong>Date:</strong> {{ $event->date }}</p>
                    <p><strong>Location:</strong> {{ $event->location }}</p>
                    <a href="{{ route('event.detail', $event->id) }}" class="btn btn-primary">View Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

<div class="m-3 d-flex justify-content-between ">
    <div>
        Showing {{ $events->firstItem() }} to {{ $events->lastItem() }} of {{ $events->total() }} results
    </div>
    <div class="m-3 d-flex justify-content-end">
        {{ $events->links() }}
    </div>
</div>

</div>
@endsection
