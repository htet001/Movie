@extends('layout.master')

@section('title','Create Movie')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h2 class="text-center mb-5">Create Movie</h2>
                <form method="post" action="{{ url('movie/create') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="movieName" class="form-label">Movie Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="movieType" class="form-label">Movie Type</label>
                                <select class="form-select" id="genre" name="genre" required>
                                    <option value="action">Action</option>
                                    <option value="adventure">Adventure</option>
                                    <option value="comedy">Comedy</option>
                                    <option value="crime">Crime</option>
                                    <option value="drama">Drama</option>
                                    <option value="fantasy">Fantasy</option>
                                    <option value="horror">Horror</option>
                                    <option value="romance">Romance</option>
                                </select>
                            </div>
                        </div>
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="startDate" class="form-label">Release Date</label>
                                <input type="date" class="form-control" id="release_date" name="release_date" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="endDate" class="form-label">End Date</label>
                                <input type="date" class="form-control" id="end_date" name="end_date" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="7" name="description" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary" id="createMovieButton">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="createMovieButton">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection