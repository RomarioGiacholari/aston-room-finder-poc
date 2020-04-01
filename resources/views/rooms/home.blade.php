@extends('layouts.app')
@section('title', $viewModel->pageTitle)
@section('content')
<div class="container">
    <h1>
        Home |
        <a href="{{ route('rooms.create') }}" role="button" class="btn btn-lg btn-success add-button mr-auto" title="Book a room"><i class="fa fa-plus" aria-hidden="true"></i></a>
    </h1>
    <hr />
    <div class="row">
        <div class="col-md-6">
            <canvas id="radar"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="line"></canvas>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <canvas id="bar"></canvas>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script defer>
    document.addEventListener("DOMContentLoaded", function () {
        //Line
        var line = document.getElementById('line').getContext('2d');
        var lineChart = new Chart(line, {
            type: 'line',
            data: {
                labels: ['Monday', 'Tueasday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                datasets: [{
                    label: 'Room availability over the week',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [50, 10, 5, 2, 20, 30, 1]
                }]
            },
        });

        //Bar
        var bar = document.getElementById('bar').getContext('2d');
        var barChart = new Chart(bar, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Room usage over time',
                    backgroundColor: 'rgb(100, 50, 100)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [80, 10, 5, 2, 20, 30, 45]
                }]
            },
        });

        //Radar
        var radar = document.getElementById('radar').getContext('2d');
        var radarChart = new Chart(radar, {
            type: 'radar',
            data: {
                labels: ['Conference rooms', 'Presentation rooms', 'Quite rooms', 'Labs', 'Computer rooms', 'With a projector', 'Isolated rooms'],
                datasets: [{
                    label: 'Availability by room type',
                    backgroundColor: 'rgb(50, 200, 5)',
                    borderColor: 'rgb(1, 1, 1)',
                    data: [80, 10, 5, 2, 20, 30, 45]
                }]
            },
        });

    });
</script>
@endsection