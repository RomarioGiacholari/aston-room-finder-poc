<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class RoomController extends Controller
{
    public function index()
    {
        $viewModel = new stdClass;
        $viewModel->pageTitle = 'Rooms';
        
        return view('rooms.index', ['viewModel' => $viewModel]);
    }

    public function home()
    {
        $viewModel = new stdClass;
        $viewModel->pageTitle = 'Home';
        
        return view('rooms.home', ['viewModel' => $viewModel]);
    }

    public function create()
    {
        $viewModel = new stdClass;
        $viewModel->pageTitle = 'Book a room';

        return view('rooms.create', ['viewModel' => $viewModel]);
    }

    public function store(Request $request)
    {
        $room = $request->room;
        $name = $request->name;
        $date = $request->date;
        $time = $request->time;
        $duration = $request->duration;

        $viewModel = new stdClass;
        $viewModel->room = $room;
        $viewModel->pageTitle = "Room booked";
        $viewModel->message = "Room {$room} booked by {$name} for {$date} at time: {$time} for {$duration} hour(s)";

        return view('rooms.confirmed', ['viewModel' => $viewModel]);
    }

    public function booked()
    {
        $viewModel = new stdClass;
        $viewModel->pageTitle = "Booked rooms";

        return view('rooms.booked', ['viewModel' => $viewModel]);
    }
    public function details()
    {
        $viewModel = new stdClass;
        $viewModel->pageTitle = "Room details";

        return view('rooms.show', ['viewModel' => $viewModel]);
    }
}
