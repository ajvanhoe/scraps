<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Exchange;
use App\Coin;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // povlaci zadatke i spisak menjacnica... dodati novcice redom...

        $tasks = Task::all();
        $exchanges = Exchange::all();
        $coins = Coin::all();
        return view('sweethome', compact('tasks', 'exchanges', 'coins'));
    }

    public function create()
    {
        return view('create');
    }

}
