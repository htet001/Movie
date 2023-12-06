@extends('layout.master')

@section('title','Register Page')

@section('content')
<form method="post" action="/register">
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 mx-auto">
                <div class="registration-form" style="margin: 0px 20px 0px 20px;">
                    <h2 class="text-center mb-4">Register Form</h2>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="mb-3" style="padding: 0px 30px 0px 30px;">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
                        @error('name')
                        <span class="text mt-1" style="color: red;font-size:15px;">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3" style="padding: 0px 30px 0px 30px;">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
                        @error('email')
                        <span class="text mt-1" style="color: red;font-size:15px;">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3" style="padding: 0px 30px 0px 30px;">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="09-123-456-789" value="{{old('phone')}}">
                        @error('phone')
                        <span class="text mt-1" style="color: red;font-size:15px;">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3" style="padding: 0px 30px 0px 30px;">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                        @error('password')
                        <span class="text mt-1" style="color: red;font-size:15px;">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3" style="padding: 0px 30px 0px 30px;">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" autocomplete="current-password">
                        @error('confirmPassword')
                        <span class="text mt-1" style="color: red;font-size:15px;">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <p style="margin-left: 30px;">If already have registered,<a href="/login" class="text-danger">Please
                                Login</a></p>
                    </div>
                    <button type="submit" class="btn btn-light btn-block" id="registerCancelButton">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-block" id="register">Register</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection