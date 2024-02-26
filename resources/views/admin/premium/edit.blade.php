@extends('admin.adminLayout.adminMaster')
@section('title','Admin Premium Movie Edit')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h2 class="text-center mb-5">Edit Premium Movie</h2>
                <form method="post" action="{{ url('/premiumMovie/update/'.$movie->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="movieName" class="form-label">Movie Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$movie->name}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="movieType" class="form-label">Genre</label>
                                <select class="form-select" id="genre" name="genre" required>
                                    @foreach($categories as $category)
                                    <option>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                        <input type="hidden" name="old_image" value="{{ $movie->image }}">
                    </div>
                    <div class="mb-3">
                        <label for="trailer" class="form-label">Trailer URL</label>
                        <input type="url" class="form-control" id="trailer" name="trailer" value="{{$movie->trailer}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="directors" class="form-label">Directors</label>
                        <input type="text" class="form-control" id="directors" name="directors" value="{{$movie->directors}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="actors" class="form-label">Actors</label>
                        <input type="text" class="form-control" id="actors" name="actors" value="{{$movie->actors}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="about" class="form-label">About</label>
                         <textarea class="form-control" id="about" rows="7" name="about" required>{{$movie->about}}</textarea>
                    </div>
                         <button type="submit" class="btn btn-primary" id="updateMovieButton">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection