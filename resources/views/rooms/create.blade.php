@extends('layouts.app')
@section('title', $viewModel->pageTitle)
@section('content')
<div class="container">
    <h1>Book a room</h1>
    <hr />
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('rooms.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="room">select room</label>
                    <select class="form-control" name="room" id="room">
                        <option value="Conference room (125)">Conference room (125)</option>
                        <option value="Presentation room (520)">Presentation room (520)</option>
                        <option value="Computer room (350)">Computer room (350)</option>
                        <option value="Quiet room (444)">Quiet room (444)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="room">Date</label>
                    <input type="date" class="form-control" name="date" id="date" required>
                </div>
                <div class="form-group">
                    <label for="room">Time</label>
                    <input type="time" class="form-control" name="time" id="time" required>
                </div>
                <div class="form-group">
                    <label for="room">Duration (hours)</label>
                    <input type="number" class="form-control" name="duration" id="duration" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="surname" id="surname" placeholder="Surname" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your email" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="notes" id="notes" rows="8" placeholder="Any notes?" required></textarea>
                </div>
                <div class='form-group'>
                    <button type="submit" class="btn btn-primary btn-block ">book</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection