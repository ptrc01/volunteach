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
        <div class="col-lg-6">
            <div class="card shadow">
                <img src="{{ asset('storage/images/' . $event->image) }}" class="card-img-top" alt="{{ $event->name }}">
                <div class="card-body">
                    <h2 class="fw-bold text-center">{{ $event->title }}</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <h5 class="fw-bold mb-3">Event Information</h5>
            <p><strong>Description:</strong> {{ $event->description }}</p>
            <p><strong>Date:</strong> {{ $event->start_date }} at {{ $event->time }}</p>
            <p><strong>Location:</strong> {{ $event->location }}</p>
            <p><strong>Additional Information:</strong> {{ $event->additional_info ?? 'No additional information available.' }}</p>

            <div class="mt-4 d-flex gap-3">
                @auth
                    <button class="btn btn-primary btn-lg flex-fill" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Register Now
                    </button>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg flex-fill">Register Now</a>
                @endauth

                <button class="btn btn-outline-primary btn-lg flex-fill">
                    Contact Organizer
                </button>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h5 class="fw-bold">Terms and Conditions</h5>
        <div class="p-3 border rounded bg-light">
            <p class="text-muted mb-0">
                {!! $event->terms_and_conditions ?? 'Terms and conditions will be added soon.' !!}
            </p>
        </div>
    </div>
    @include('RegistrationForm')
</div>
@endsection
