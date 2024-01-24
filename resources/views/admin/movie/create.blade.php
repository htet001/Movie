@extends('admin.adminLayout.adminMaster')
@section('title','Admin Movie Create')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                @if(session('error'))
                <div class="alert alert-success" id="successMessage">
                    {{ session('error') }}
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('successMessage').style.display = 'none';
                    }, 3000);
                </script>
                @endif
                <h2 class="text-center mb-5">Create Movie</h2>
                <form method="post" action="{{route('movie.create')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="movieName" class="form-label">Movie Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="movieType" class="form-label">Genre</label>
                                <select class="form-select" id="genre" name="genre" required>
                                    @foreach($categories as $category)
                                    <option>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                    <div class="mb-3">
                        <label for="trailer" class="form-label">Trailer URL</label>
                        <input type="url" class="form-control" id="trailer" name="trailer" required>
                    </div>
                    <div class="mb-3">
                        <label for="directors" class="form-label">Directors</label>
                        <input type="text" class="form-control" id="directors" name="directors" required>
                    </div>
                    <div class="mb-3">
                        <label for="actors" class="form-label">Actors</label>
                        <input type="text" class="form-control" id="actors" name="actors" required>
                    </div>
                    <div class="mb-3 d-flex align-items-center">
                        <input type="checkbox" id="upcoming" name="upcoming" value="1" style="width: 3%; margin-right:20px;">
                        <label for="upcoming" class="form-label" style="padding-top: 8px;">Upcoming</label>
                    </div>
                    <div class="mb-3">
                        <label for="slider_image" class="form-label">Slider Image</label>
                        <input type="file" class="form-control" id="slider_image" name="slider_image" required>
                    </div>
                    <div class="mb-3">
                        <label for="about" class="form-label">About</label>
                        <textarea class="form-control" id="about" rows="7" name="about" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" id="createMovieButton">Create</button>
                    <button type="submit" class="btn btn-secondary" id="createMovieButton">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection