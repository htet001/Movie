@extends('admin.adminLayout.adminMaster')
@section('title','View Rooms')
@section('content')
<h2>{{ $rooms->name }}'s Rooms</h2>
<table id="viewTable">
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
                    <a href="{{url('cinema/edit/'.$cinema->id)}}" id="view_edit">Edit</a>
                    <a href="{{url('cinema/delete/'.$cinema->id)}}" id="view_delete">Delete</a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection