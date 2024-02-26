@extends('layout.master')
@section('title','Payment')
@section('content')
<div class="my-5" id="payment">
    <h2>Subscribe Plan</h2>
    <form action="{{url('payment')}}" method="POST">
        @csrf
        <div class="pay-container">
            <h3>Premium</h3>
            <h1>99$</h1>
            <ul>
                <li>Life time</li>
                <li>Free Movies</li>
                <li>Enjoy Your Life</li>
            </ul>
            <button class="pay-button">Subscribe</button>
        </div>
    </form>
</div>
@endsection