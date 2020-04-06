@extends('layouts.app')
@section('title', $viewModel->pageTitle)
@section('content')
<div class="container">
    <h1>Support 24/7</h1>
    <hr />
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your email" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" id="message" rows="8" placeholder="Questions?" required></textarea>
            </div>
            <div class='form-group'>
                <button type="submit" class="btn btn-primary btn-block ">send</button>
            </div>
        </div>
    </div>
</div>
@endsection