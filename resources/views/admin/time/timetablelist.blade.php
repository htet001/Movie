@extends('admin.adminLayout.adminMaster')
@section('title','Theater List')
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

.edit,
.delete {
    border: 2px solid green;
    background: none;
    padding: 3px 10px;
    border-radius: 5px;
}

.delete {
    margin-left: 10px;
    border: 2px solid tomato;
}

.edit:hover {
    background-color: green;
    color: white;
}

.delete:hover {
    background-color: tomato;
    color: white;
}
</style>
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
            <th>Movie name</th>
            <th>Room</th>
            <th>Start date</th>
            <th>End Date</th>
            <th>Times</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        @foreach($timetables as $timetable)
        @php
        try {
        $times = is_string($timetable->time) ? unserialize($timetable->time) : [];
        $times = is_array($times) ? $times : [];
        } catch (\Throwable $e) {
        $times = [];
        }
        @endphp

        @foreach($times as $index => $time)
        <tr>
            <td>{{$timetable->id}}</td>
            <td>{{$timetable->movie->name}}</td>
            <td>{{$timetable->room->name}}</td>
            <td>{{$timetable->start_date}}</td>
            <td>{{$timetable->end_date}}</td>
            <td>{{ $time }}</td>
            <td>
                <a class="edit" href="{{url('timetable/edit/'.$timetable->id)}}">Edit</a>
                <a class="delete" href="{{url('timetable/delete/'.$timetable->id)}}">Delete</a>
            </td>
        </tr>
        @endforeach
        @endforeach
    </tbody>

</table>
@endsection