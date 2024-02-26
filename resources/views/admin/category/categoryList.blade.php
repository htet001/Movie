@extends('admin.adminLayout.adminMaster')
@section('title','Admin Dashboard')
@section('content')
<table class="categoryTable">
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
                    <a href="{{url('category/edit/'.$category->id)}}" id="category_edit">Edit</a>
                    <a href="{{url('category/delete/'.$category->id)}}" id="category_delete">Delete</a>
                </div>
            </td>
        </tr>
    </tbody>
    @endforeach
    @endsection