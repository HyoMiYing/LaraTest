<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Queswer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get all 'queswers' (question-and-answers)
        $queswers = Queswer::all();

        return view('home')->with('queswers', $queswers);
    }
}
