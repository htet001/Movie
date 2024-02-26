@extends('admin.adminLayout.adminMaster')
@section('title','Admin Movie Create')
@section('content')
<div class="container mt-5" id="roomContainer">
    @if(session('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
    @endif
    <h2 class="mb-4" id="roomTitle">Create Room</h2>
    <form id="theater-form" method="post" action="{{url('/cinema/create')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="theater_id" class="form-label">Cinema Name</label>
                    <select class="form-select" id="theater_id" name="theater_id" required>
                        @foreach($theaters as $theater)
                        <option value="{{ $theater->id }}">{{ $theater->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Input Image</label>
                    <input class="form-control" type="file" id="imageInput" accept="image/*" name="image" required>
                </div>
                <button type="submit" style="width: 20%;margin-left:10px;" class="btn btn-primary mt-3">Create</button>
            </div>
            <div class="col-md-3" id="roomCol">
                <div class="text-center">
                    <h4 class="mb-2" id="roomImage">Room Image</h4>
                    <img class="img-fluid" id="imagePreview" style="width: 330px;height:220px;">
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
        </div>
    </form>
</div>
@endsection