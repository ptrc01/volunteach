@extends('layout')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="text-4xl font-bold">Admin Dashboard</h1>
        <p class="text-gray-600 mt-2">Welcome back, Admin! Manage events and users here.</p>
    </div>

    <!-- Dashboard Cards -->
    <div class="row">
        <!-- Manage Events -->
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title">Manage Events</h5>
                    <p class="card-text">Create, update, and delete volunteer events.</p>
                    <a href="{{ route('admin.events.index') }}" class="btn btn-primary">Go to Events</a>
                </div>
            </div>
        </div>

        <!-- Manage Users -->
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title">Manage Users</h5>
                    <p class="card-text">View and manage registered users.</p>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-success">Go to Users</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
