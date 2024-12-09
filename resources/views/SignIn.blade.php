@extends('layout')

@push('link')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
@endpush

@section('errlogin')
    <div class="alert alert-danger">
        Please check your email and password and try again.
    </div>
@endsection

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Sign In to Your Account</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('doLogin') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" value="{{old('email')}}">
                    @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="{{old('password')}}">
                    @error('password')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </form>

            {{-- <div class="text-center my-3">or</div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-outline-danger mx-2">
                    <i class="fab fa-google"></i> Continue with Google
                </button>
                <button class="btn btn-outline-dark mx-2">
                    <i class="fab fa-apple"></i> Continue with Apple
                </button>
            </div> --}}

            <p class="text-center mt-3">Don't have an account? <a href="#">Sign Up</a></p>
        </div>
    </div>
</div>
@endsection
