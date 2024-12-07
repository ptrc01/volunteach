@extends('layout')

@section('title', 'Volunteer Opportunities')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Volunteer Opportunities</h1>
    <div class="row">

        @foreach($events as $event)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ $event->image }}" class="card-img-top" alt="{{ $event->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                    <p><strong>Date:</strong> {{ $event->date }}</p>
                    <p><strong>Location:</strong> {{ $event->location }}</p>
                    <a href="{{ url('/volunteer/register/'.$event->id) }}" class="btn btn-primary">View Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

<div class="m-3 d-flex justify-content-between">
    <div>
        Showing {{ $events->firstItem() }} to {{ $events->lastItem() }} of {{ $events->total() }} results
    </div>
    <div class="m-3 d-flex justify-content-end">
        {{ $events->links() }}
    </div>
</div>

@if(session('success'))
    <script>
        Swal.fire({
            title: 'Success!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
@endif
</div>
@endsection
