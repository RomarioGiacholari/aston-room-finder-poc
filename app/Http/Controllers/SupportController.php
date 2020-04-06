<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class SupportController extends Controller
{
    public function index()
    {
        $viewModel = new stdClass;
        $viewModel->pageTitle = 'Support';

        return view('support.index', ['viewModel' => $viewModel]);
    }
}
