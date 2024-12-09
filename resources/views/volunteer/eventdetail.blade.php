@extends('layout')

@section('title', 'Event Details')

@section('content')
<div class="container mt-5">
    <!-- Back Button -->
    <div class="mb-4">
        <a href="{{ url()->previous() }}" class="btn btn-secondary">
            Back
        </a>
    </div>

    <div class="row g-4">
        <!-- Left Section: Event Image and Title -->
        <div class="col-lg-6">
            <div class="card shadow">
                <img src="{{ asset('storage/events/' . $event->image) }}" class="card-img-top" alt="{{ $event->name }}">
                <div class="card-body">
                    <h2 class="fw-bold text-center">{{ $event->title }}</h2>
                </div>
            </div>
        </div>

        <!--Event Details -->
        <div class="col-lg-6">
            <h5 class="fw-bold mb-3">Event Information</h5>
            <p><strong>Description:</strong> {{ $event->description }}</p>
            <p><strong>Date:</strong> {{ $event->start_date }} at {{ $event->time }}</p>
            <p><strong>Location:</strong> {{ $event->location }}</p>
            <p><strong>Additional Information:</strong> {{ $event->additional_info ?? 'No additional information available.' }}</p>

            <div class="mt-4 d-flex gap-3">
                <button class="btn btn-primary btn-lg flex-fill" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register Now
                </button>
                <button class="btn btn-outline-primary btn-lg flex-fill">
                    Contact Organizer
                </button>
            </div>
        </div>
    </div>

    <!-- Terms and Conditions Section -->
    <div class="mt-5">
        <h5 class="fw-bold">Terms and Conditions</h5>
        <div class="p-3 border rounded bg-light">
            <p class="text-muted mb-0">
                {!! $event->terms_and_conditions ?? 'Terms and conditions will be added soon.' !!}
            </p>
        </div>
    </div>

    <!-- Registration Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="registerModalLabel">Registration Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('volunteer.registration', $event->id) }}" method="POST">
                        @csrf
                        <!-- Form -->
                        <div class="mb-3">
                            <label for="why_interested" class="form-label fw-bold">Why Are You Interested?</label>
                            <textarea class="form-control" id="why_interested" name="why_interested" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="why_qualified" class="form-label fw-bold">Why Are You Qualified?</label>
                            <textarea class="form-control" id="why_qualified" name="why_qualified" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="job" class="form-label fw-bold">Occupation</label>
                            <input type="text" class="form-control" id="job" name="job" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label fw-bold">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="commitment" name="commitment" required>
                            <label class="form-check-label" for="commit">
                                I am committed to this event and will actively participate.
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit Registration</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
