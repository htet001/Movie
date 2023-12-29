@extends('layout.master')

@section('title','All Theater')

@section('content')
<style>
    #theater_container {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 15px;
        transition: box-shadow 0.3s ease-in-out;
    }
</style>
<div class="container my-5" id="theater_container">
    <h1 class="text-center">Theater List</h1>

    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex">
                <img src="{{ asset('images/junction-city.jpg') }}" alt="Junction City" id="theaterImage">
                <div>
                    <h5 class="card-title">Theater Name 1</h5>
                    <p class="card-text">Location: City, State</p>
                    <a href="{{url('show/{id}/cinema')}}" class="btn btn-primary" id="viewButton">View</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex">
                <img src="{{ asset('images/junction-city.jpg') }}" alt="Junction City" id="theaterImage">
                <div>
                    <h5 class="card-title">Theater Name 2</h5>
                    <p class="card-text">Location: City, State</p>
                    <a href="#" class="btn btn-primary" id="viewButton">View</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection