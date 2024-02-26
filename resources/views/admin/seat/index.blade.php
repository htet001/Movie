@extends('admin.adminLayout.adminMaster')
@section('title','Cinema List')
@section('content')
<div class="container col-md-6" style="margin-top: 50px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 10px 50px;
    border-radius: 10px;">
    <div class="row">
        @if(session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
        @endif
        <h1 class="text-center">Seat</h1>
        <form action="{{url('seat/'.$room->id.'/create')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="room_id" class="form-label">Room</label>
                <input type="text" class="form-control" id="room_id" name="room_id" value="{{$room->name}}" readonly>
            </div>
            <div class="row form-group">
                <div class="col-md-6">
                    <label for="seat" class="form-label">Seat Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="col-md-6">
                    <label for="seat" class="form-label">Count</label>
                    <input type="number" class="form-control" id="count" name="count" min="0" max="16">
                </div>
            </div>
            <div class="form-group">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" min="0" step="500">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection