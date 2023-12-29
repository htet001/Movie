@extends('admin.adminLayout.adminMaster')
@section('title','Admin Movie Create')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h2 class="text-center mb-3">Create Categories</h2>
                <form method="post" action="{{url('category/update/'.$category->id)}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Category name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$category->name}}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection