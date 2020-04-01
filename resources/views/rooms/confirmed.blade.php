@extends('layouts.app')
@section('title', $viewModel->pageTitle)
@section('content')
<div class="container">
    <h1>Room {{ $viewModel->room }} booked!</h1>
    <hr />
    <div class="row">
        <div class="col-md-12">
            <p>{{ $viewModel->message }}</p>
        </div>
    </div>
</div>
@endsection