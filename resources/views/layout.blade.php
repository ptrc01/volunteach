<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volunteach</title>
    <link href="{{ asset('logo.svg') }}" rel="icon" type="image/svg+xml">
    <link rel="stylesheet" href="{{ asset('css/LayoutStyle.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light pt-2 pb-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('client.index') }}">
                <img src="{{ asset('storage/logo-navbar.png') }}" width="50px" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">

                <ul class="nav justify-content-center">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('client.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('event.list') }}">Events</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('client.aboutUs') }}">About Us</a>
                    </li>
                    @auth
                        @if(auth()->user()->role === 'admin') <!-- Cek apakah pengguna adalah admin -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>

            <div class="d-flex gap-2">
                @auth
                    <form method="POST" action="/logout">
                        @csrf
                        <button class="btn btn-primary" type="submit">Logout</button>
                    </form>

                @else

                    <li>
                        <a class="btn btn-outline-primary" href="{{ route('login') }}" role="button">Login</a>
                    </li>
                    <li>
                        <a class="btn btn-primary" href="{{ route('register')}}" role="button">Register</a>
                    </li>

                @endauth
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="mt-2">
        <p class="text-center bg-light p-2 mt-5 mb-0">&copy; 2024 Volunteach. All rights reserved.</p>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</html>
