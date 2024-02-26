@extends('admin.adminLayout.adminMaster')
@section('title','Admin Dashboard')
@section('content')
<style>
body {
    font-family: Arial, sans-serif;
}

table {
    border-collapse: collapse;
    width: 100%;
    margin: 20px auto;
}

th,
td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

#status_edit,
#showtime,
#status_delete {
    margin: auto;
    border-radius: 5px;
    color: white;
    background-color: blue;
    padding: 5px 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

#showtime {
    background-color: green;
}

#status_delete {
    color: white;
    background-color: orangered;
    padding: 5px 10px 5px 10px;
}

#pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

#pagination .pagination {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
}

#pagination .pagination li {
    margin: 0 5px;
}

#pagination .pagination a,
#pagination .pagination span {
    display: block;
    padding: 8px 12px;
    text-decoration: none;
    color: #333;
    border: 1px solid #ccc;
    border-radius: 4px;
}

#pagination .pagination a:hover {
    background-color: #eee;
}

#pagination .pagination .active span {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
}
</style>
<table>
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
            <td>
                <div class="d-flex">
                    <a href="{{url('premiumMovie/edit/'.$movie->id)}}" id="status_edit">Edit</a>
                    <a href="{{url('premiumMovie/delete/'.$movie->id)}}" id="status_delete">Delete</a>
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