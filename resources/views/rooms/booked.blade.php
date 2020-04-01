@extends('layouts.app')
@section('title', $viewModel->pageTitle)
@section('content')
<div class="container">
    <h1>Booked rooms</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Room identifier</th>
                            <th>Due date</th>
                            <th>Time</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(range(0,10)  as $random)
                        <tr>
                            <td>{{ random_int(1, 1000) }}</td>
                            <td>{{ date("Y-m-d H:i:s", rand(1262055681,1262055681)) }}</td>
                            <td>{{ date("Y-m-d H:i:s", rand(1262055681,1262055681)) }} </td>
                            <td>{{ random_int(1, 5) }} hour(s)</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection