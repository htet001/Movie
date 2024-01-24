@extends('admin.adminLayout.adminMaster')
@section('title','Admin Dashboard')
@section('content')
<style>
body {
    font-family: Arial, sans-serif;
}

table {
    border-collapse: collapse;
    width: 70%;
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
#status_delete {
    margin: auto;
    border-radius: 5px;
    color: white;
    background-color: blue;
    padding: 5px 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

#status_delete {
    color: white;
    background-color: orangered;
    padding: 5px 10px 5px 10px;
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
            <th>Status</th>
        </tr>
    </thead>
    @foreach($categories as $category)
    <tbody>
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td style="width: 20%;">
                <div class="d-flex">
                    <a href="{{url('category/edit/'.$category->id)}}" id="status_edit">Edit</a>
                    <a href="{{url('category/delete/'.$category->id)}}" id="status_delete">Delete</a>
                </div>
            </td>
        </tr>
    </tbody>
    @endforeach
    @endsection