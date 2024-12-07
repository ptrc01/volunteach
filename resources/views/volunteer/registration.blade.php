@extends('layout')

@section('title', 'Volunteer Registration')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Register for {{ $event->title }}</h1>
    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <form action="{{ url('/volunteer/register/'.$event->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="mb-3">
                    <label for="job" class="form-label">Job</label>
                    <input type="text" class="form-control" id="job" name="job" required>
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" value="{{ $event->title }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="interested_reason" class="form-label">Why are you interested in being a volunteer at this event?</label>
                    <textarea class="form-control" id="interested_reason" name="interested_reason" rows="4" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="qualified_reason" class="form-label">Why do you think you are qualified for the event?</label>
                    <textarea class="form-control" id="qualified_reason" name="qualified_reason" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit Registration</button>
            </form>
        </div>
    </div>
</div>
@endsection
