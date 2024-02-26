@extends('admin.adminLayout.adminMaster')
@section('title','Admin Movie Create')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h2 class="text-center mb-3">Create Movie Categories</h2>
                @if(session('message'))
                <div class="alert alert-danger" id="successMessage">
                    {{ session('message') }}
                </div>
                <script>
                setTimeout(function() {
                    document.getElementById('successMessage').style.display = 'none';
                }, 3000);
                </script>
                @endif
                <form method="post" action="{{ route('category.create') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Category name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection