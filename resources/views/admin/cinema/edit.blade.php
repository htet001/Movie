@extends('admin.adminLayout.adminMaster')
@section('title','Admin Cinema Edit')
@section('content')
<style>
.container {
    max-width: 80%;
    margin: auto;
    padding: 20px;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #333;
}

.form-control,
.form-select {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.mb-3 {
    margin-bottom: 15px;
}

.mt-3 {
    margin-top: 15px;
}

.col-md-3 {
    width: 50%;
}
</style>
<div class="container mt-5">
    <h2 class="mb-4">Cinema Edit</h2>
    <form id="theater-form" method="post" action="{{url('/cinema/update/'.$cinema->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $cinema->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="theater_id" class="form-label">Theater Name</label>
                    <select class="form-select" id="theater_id" name="theater_id" required>
                        @foreach($theaters as $theater)
                        <option value="{{ $theater->id }}">{{ $theater->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Input Image</label>
                    <input class="form-control" type="file" id="imageInput" accept="image/*" name="image">
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <h4 class="mt-3">Theater Image</h4>
                    @if($cinema->image)
                    <img class="img-fluid" id="imagePreview" src="{{ asset('uploads/' . $cinema->image) }}"
                        style="width: 330px; height:200px;">
                    @else
                    <img class="img-fluid" id="imagePreview" style="width: 330px; height:200px;">
                    @endif
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
            <button type="submit" style="width: 10%; margin-left:10px;" class="btn btn-primary mt-3">Update</button>
        </div>
    </form>
</div>

@endsection