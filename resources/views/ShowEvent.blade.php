@extends('layout')

@section('title', 'Event Details')

@section('content')
<div class="container mt-5">
    <div class="mb-4">
        <a href="{{ url()->previous() }}" class="btn btn-secondary">
            Back
        </a>
    </div>

    <div class="row g-4">
        <div>
            <div class="card shadow">
                <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->title }}">
                <div class="card-body">
                    <h2 class="fw-bold text-center">{{ $event->title }}</h2>
                    <p>{{ $event->description }}</p>
                    <p><strong>Location:</strong> {{ $event->location }}</p>
                    <p><strong>Date:</strong> {{ $event->start_date }} at {{ $event->time }}</p>
                    <p><strong>Additional Information:</strong> {{ $event->additional_info ?? 'No additional information available.' }}</p>
                </div>
            </div>
        </div>

        <div >
            <h5 class="fw-bold mb-3">Participants</h5>
            @if ($participants->count() > 0)
                <ul class="list-group">
                    @foreach ($participants as $participant)
                        <li class="list-group-item">
                            <h6 class="mb-1">{{ $participant->name }}</h6>
                            <p class="mb-1">{{ $participant->email }}</p>
                            <p class="mb-1">{{ $participant->phone }}</p>
                            <p class="mb-0">{{ $participant->job }}</p>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No participants have registered yet.</p>
            @endif
        </div>
    </div>
</div>
@endsection
