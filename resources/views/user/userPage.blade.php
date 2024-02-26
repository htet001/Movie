@extends('layout.master')
@section('title','User Dashboard')
@section('content')
<div class="container-fluid my-5" id="profile">
    <div class="card-header">
        <img src="" alt="profile image" id="profileImage">
    </div>
    <div>
        <input type="file" id="file" style="display: none;" accept="image/*">
        <button id="updateProfile">Update Profile</button>
    </div>
    <h3>{{auth()->user()->name}}</h3>
    <div class="d-flex" id="profileData">
        <div class="profileData01">
            <h5>Email</h5>
            <h5>Phone Number</h5>
        </div>
        <div class="profileData02">
            <h5 id="email">: {{auth()->user()->email}}
                <i class="fa-solid fa-pen" id="editPen"></i>
            </h5>
            <h5 id="phone">: {{auth()->user()->phone}}
                <i class="fa-solid fa-pen" id="editPen"></i>
            </h5>
        </div>
    </div>
</div>

<script>
document.getElementById('updateProfile').addEventListener('click', function() {
    document.getElementById('file').click();
});

document.getElementById('file').addEventListener('change', function() {
    var file = this.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function(event) {
            document.getElementById('profileImage').src = event.target.result;
        };
        reader.readAsDataURL(file);
    }
});
</script>

@endsection