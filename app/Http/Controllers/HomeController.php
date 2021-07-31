<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\MovieVote;
use App\Models\Music;
use App\Models\MusicVote;
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
        $this->middleware('auth')->except('index');
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

        return view('landing')->with(['movies'=> $movies, 'musics' => $musics ]);
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $movieVotes = MovieVote::all();
        $musicVotes = MusicVote::all();

        return view('dashboard')->with(['movieVotes'=> $movieVotes, 'musicVotes' => $musicVotes ]);
    }
    
    public function home()
    {
        $movies = Movie::all();
        $musics = Music::all();

        return view('home')->with(['movies'=> $movies, 'musics' => $musics ]);
    }
}
