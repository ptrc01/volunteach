@extends('layout')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="text-4xl font-bold">Admin Dashboard</h1>
        <p class="text-gray-600 mt-2">Welcome back, Admin! Manage volunteer events from here.</p>
    </div>

    <!-- Event Management Section -->
    <div class="mb-5">
        <h2 class="mb-3">Manage Events</h2>

        <!-- Create Event Button -->
        <a href="{{ route('admin.events.create') }}" class="btn btn-primary mb-3">Create New Event</a>

        <!-- Event List Table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($events as $event)
                    <tr>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->date }}</td>
                        <td>{{ $event->location }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <!-- Delete Button -->
                            <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No events found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        {{ $events->links() }}
    </div>
</div>
@endsection
