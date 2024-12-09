@extends('layout')

@section('success')
    <div class="alert alert-success">
        Success Register!
    </div>
@endsection

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Create an Account</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('doRegis') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your full name" value="{{old('name')}}">
                    @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email address</label>
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
                <div class="form-group mb-3">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password" value="{{old('password_confirmation')}}">
                    @error('password_confirmation')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-3">Sign Up</button>
            </form>
            <p class="text-center mt-3">Already have an account? <a href="#">Sign In</a></p>
        </div>
    </div>
</div
@endsection
