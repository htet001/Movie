@extends('admin.adminLayout.adminMaster')
@section('title','Admin Movie Create')
@section('content')
<div class="container mt-5" id="cinemaContainer">
    <h2 class="mb-4" id="cinemaForm">Create Cinema</h2>
    @if(session()->has('message'))
    <div class="alert alert-danger">
        {{ session()->get('message') }}
    </div>
    @endif
    <form id="theater-form" method="post" action="{{url('/theater/create')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" required>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Input Image</label>
                    <input class="form-control" type="file" id="imageInput" accept="image/*" name="image" required>
                </div>
            </div>
            <div class="col-md-3" id="cinemaImage">
                <div class="text-center">
                    <h4 class="mt-1">Cinema Image</h4>
                    <img class="img-fluid" id="imagePreview" style="width: 330px;height:200px;">
                    <script>
                    const imageInput = document.getElementById('imageInput');
                    const imagePreview = document.getElementById('imagePreview');

                    imageInput.addEventListener('change', function() {
                        const file = imageInput.files[0];
                        if (file) {
                            const reader = new FileReader();

                            reader.onload = function(e) {
                                imagePreview.src = e.target.result;
                            };

                            reader.readAsDataURL(file);
                        } else {
                            imagePreview.src = '';
                        }
                    });
                    </script>
                </div>
            </div>
            <button type="submit" style="width: 10%;margin-left:10px;" class="btn btn-primary mt-3">Create</button>
        </div>
    </form>
</div>
@endsection