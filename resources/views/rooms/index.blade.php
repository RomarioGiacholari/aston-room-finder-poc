@extends('layouts.app')
@section('title', $viewModel->pageTitle)
@section('content')
<div class="container">
    <h1>Index</h1>
    <hr />
    <div class="row">
        @foreach(range(1, 25) as $idex)
        <div class="col-md-4">
            <div class="card" style="width: 18rem; margin-bottom:2rem">
            <a href="{{ route('rooms.details') }}">
                <img class="card-img-top" src="https://picsum.photos/150/150" alt="alt">
            </a>
                <div class="card-body">
                    <h5 class="card-title">Room description</h5>
                    <a href="{{ route('rooms.details') }}" class="btn btn-primary" role="button">view info</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection