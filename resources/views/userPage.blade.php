@extends('layout.master')
@section('title','User Dashboard')
@section('content')
<div class="container-fluid my-5" id="profile">
    <div class="card-header">
        <img src="{{asset('images/profile.jpg')}}" alt="profile image" id="profileImage">
    </div>
    <div>
        <button id="updateProfile">
            <label for="file" id="profileLabel">Update Profile</label>
            <input type="file" id="file">
        </button>
    </div>
    <div>
        <h3>Name</h3>
    </div>
    <div class="d-flex" id="profileData">
        <div class="profileData01">
            <h5>Email</h5>
            <h5>Phone Number</h5>
        </div>
        <div class="profileData02">
            <h5 id="email">: htetshinelinn14@gmail.com
                <i class="fa-solid fa-pen" id="editPen"></i>
            </h5>
            <h5 id="phone">: 09671467097
                <i class="fa-solid fa-pen" id="editPen"></i>
            </h5>
        </div>
    </div>
</div>
@endsection