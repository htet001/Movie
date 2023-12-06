@extends('layout.master')

@section('title','Login Page')

@section('content')

@if(session('register_success'))
<div id="alert" class="alert-container text-center">
    {{ session('register_success') }}
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            document.getElementById('alert').classList.remove('alert-show');
        }, 3000);
        // Triggering a reflow to apply the initial class for the transition
        document.getElementById('alert').offsetHeight;
        document.getElementById('alert').classList.add('alert-show');
    });
</script>
@endif


<form method="post" action="/login">
    <div class="container-fluid" style="margin-top: 120px;">
        <div class="row">
            <div class="col-md-6 col-sm-12 mx-auto">
                <div class="registration-form" style="margin: 0px 20px 0px 20px;">
                    <h2 class="text-center mb-4">Login Form</h2>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="mb-3" style="padding: 0px 30px 0px 30px;">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
                        @error('email')
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
                        <p>If don't have an account? <a href="/register" class="text-danger">Please Register</a></p>
                    </div>
                    <button type="submit" class="btn btn-light btn-block" id="loginCancelButton">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-block" id="loginButton">Login</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection