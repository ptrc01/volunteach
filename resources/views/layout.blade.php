<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volunteach</title>
    <link href="{{ asset('logo.svg') }}" rel="icon" type="image/svg+xml">
    <link rel="stylesheet" href="{{ asset('css/LayoutStyle.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light pt-2 pb-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">
                <img src="{{ asset('storage/logo-navbar.png') }}" width="50px" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">

                <ul class="nav justify-content-center">
                    <li class="nav-item">
                      <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/events">Events</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/aboutUs">About Us</a>
                    </li>
                </ul>
            </div>

            <div class="d-flex gap-2">
                {{-- @auth --}}

                    <a class="d-flex align-items-center text-decoration-none" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('storage/avatar.png') }}" alt="Profile" class="rounded-circle profile-img">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end text-center" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        <form method="POST" action="/logout">
                            @csrf
                            <button class="btn btn-primary" type="submit">Logout</button>
                        </form>
                    </ul>

                {{-- @else

                    <li>
                        <a class="btn btn-outline-primary" href="/login" role="button">Login</a>
                    </li>
                    <li>
                        <a class="btn btn-primary" href="/register" role="button">Register</a>
                    </li>

                @endauth --}}
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="mt-2">
        <p class="text-center bg-light p-2 mb-0 fixed-bottom">&copy; 2024 Volunteach. All rights reserved.</p>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
