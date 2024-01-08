@extends('admin.adminLayout.adminMaster')
@section('title','View Rooms')
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
    #status_delete {
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
        margin-left: 10px;
    }
</style>
<h2>{{ $rooms->name }}'s Rooms</h2>
<table>
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    @if(session('edit_message'))
    <div class="alert alert-success">
        {{ session('edit_message') }}
    </div>
    @endif
    @if(session('delete_message'))
    <div class="alert alert-success">
        {{ session('delete_message') }}
    </div>
    @endif
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rooms->rooms as $cinema)
        <tr>
            <td>{{$cinema->id}}</td>
            <td>{{$cinema->name}}</td>
            <td><img src="{{asset('uploads/'.$cinema->image  )}}" alt="Image" width="130px" height="80px"></td>
            <td>
                <div class="d-flex" style="justify-content: center;">
                    <a href="{{url('cinema/edit/'.$cinema->id)}}" id="status_edit">Edit</a>
                    <a href="{{url('cinema/delete/'.$cinema->id)}}" id="status_delete">Delete</a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection