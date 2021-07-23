<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Music;
use Illuminate\Http\Request;

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
        $movies = Movie::all();
        $musics = Music::all();

        return view('welcome')->with(['movies'=> $movies, 'musics' => $musics ]);
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('dashboard');
    }
}
