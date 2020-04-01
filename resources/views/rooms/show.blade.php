@extends('layouts.app')
@section('title', $viewModel->pageTitle)
@section('content')
<div class="container">
    <h1>Room details| <a href="{{ route('rooms.create') }}" role="button" class="btn btn-lg btn-success mr-auto" title="Book a room">Book room</a></h1>
    <hr />
    <div class="row">
        <div class="col-md-4 mb-2">
            <img class="responsive" height="250" width="250" src="https://picsum.photos/150/150" alt="alt">
        </div>
        <div class="col-md-4">
            <h5>Seat availability</h5>
            <img class="responsive" height="250" width="100%" src="https://plymouthartscentre.org/wp-content/uploads/2019/02/Seating-Plan-Access-info-1000x748.jpg" alt="alt">
        </div>
        <div class="col-md-4">
            <h5>Room identifier</h5>
            <p>Room type</p>
            <p>Available seats: 10</p>
            <p>Available computers: 10</p>
        </div>
    </div>
</div>
@endsection