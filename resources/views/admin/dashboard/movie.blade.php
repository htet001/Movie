@extends('admin.adminLayout.adminMaster')
@section('title','Admin Dashboard')
@section('content')
<style>
body {
    font-family: Arial, sans-serif;
}

table {
    border-collapse: collapse;
    width: 80%;
    margin: 20px auto;
}

th,
td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}
</style>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Genre</th>
            <th>Trailer</th>
            <th>Directors</th>
            <th>Actors</th>
            <th>Upcoming</th>
            <th>About</th>
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
            <td><a href="{{$movie->trailer}}">View Video</a></td>
            <td>{{$movie->directors}}</td>
            <td>{{$movie->actors}}</td>
            <td>Yes</td>
            <td>{{$movie->about}}</td>
            <td><img src="slider_image1.jpg" alt="Slider Image 1" width="100"></td>
            <td>Active</td>
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
    @endforeach
</table>

@endsection