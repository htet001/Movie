@extends('admin.adminLayout.adminMaster')
@section('title','Cinema List')
@section('content')
<table class="roomListTable">
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
            <th>Cinema</th>
            <th>Image</th>
            <th>Status</th>
        </tr>
    </thead>
    @foreach($cinemas as $cinema)
    <tbody>
        <tr>
            <td>{{$cinema->id}}</td>
            <td>{{$cinema->name}}</td>
            <td>{{$cinema->cinema->name}}</td>
            <td><img src="{{asset('uploads/'.$cinema->image  )}}" alt="Image" width="130px" height="80px"></td>
            <td>
                <div class="d-flex" style="justify-content: center;">
                    <a href="{{url('seat/'.$cinema->id)}}" id="seat">Seats</a>
                    <a href="{{url('seat/'.$cinema->id).'/create'}}" id="seat">Create Seats</a>
                    <a href="{{url('cinema/edit/'.$cinema->id)}}" id="room_edit">Edit</a>
                    <a href="{{url('cinema/delete/'.$cinema->id)}}" id="room_delete">Delete</a>
                </div>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection