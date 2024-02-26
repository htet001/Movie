@extends('admin.adminLayout.adminMaster')
@section('title','Admin Dashboard')
@section('content')
<table class="movieListTable">
    @if(session('message'))
    <div class="alert alert-success" id="successMessage">
        {{ session('message') }}
    </div>
    <script>
    setTimeout(function() {
        document.getElementById('successMessage').style.display = 'none';
    }, 3000);
    </script>
    @endif
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Genre</th>
            <th>Image</th>
            <th>Trailer</th>
            <th>Directors</th>
            <th>Actors</th>
            <th>Slider Image</th>
            <th>Status</th>
        </tr>
    </thead>
    @foreach($movies as $movie)
    <tbody>
        <tr>
            <td>{{$movie->id}}</td>
            <td>{{$movie->name}}</td>
            <td>{{$movie->genre}}</td>
            <td><img src="{{asset('uploads/'.$movie->image  )}}" alt="Image" width="100" height="120px"></td>
            <td><a href="{{$movie->trailer}}"><i style="color: red;text-decoration:underline;">Video Link</i></a></td>
            <td>{{$movie->directors}}</td>
            <td>{{$movie->actors}}</td>
            <td><img src="{{asset('uploads/'.$movie->slider_image  )}}" alt="Slider_Image" width="100" height="70px">
            </td>
            <td>
                <div class="MovieListStatus">
                    <a href="{{url('movie/edit/'.$movie->id)}}" id="status_edit">Edit</a>
                    <a href="{{url('movie/delete/'.$movie->id)}}" id="status_delete">Delete</a>
                    <a href="{{url('/showtime/create/'.$movie->id)}}" id="showtime">Show Time</a>
                </div>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
<div id="pagination">
    {{ $movies->links() }}
</div>
@endsection