@extends('admin.adminLayout.adminMaster')
@section('title','Theater List')
@section('content')
<table class="cinemaListTable">
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Location</th>
            <th>Image</th>
            <th>Status</th>
        </tr>
    </thead>
    @foreach($theaters as $theater)
    <tbody>
        <tr>
            <td>{{$theater->id}}</td>
            <td>{{$theater->name}}</td>
            <td>{{$theater->location}}</td>
            <td><img src="{{asset('uploads/'.$theater->image  )}}" alt="Image" width="130px" height="80px"></td>
            <td style="width: 30%;">
                <div class="d-flex" style="justify-content: center;">
                    <a href="{{ route('theaters.viewRooms', ['cinemaId' => $theater->id]) }}" id="view">View
                        Rooms</a>
                    <a href="{{url('/theater/edit/'.$theater->id)}}" id="cinema_edit">Edit</a>
                    <a href="{{url('/theater/delete/'.$theater->id)}}" id="cinema_delete">Delete</a>
                </div>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection