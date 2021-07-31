<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\MovieVote;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieVoteController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function castVote(Movie $movie)
    {
        $movieVote = MovieVote::updateOrCreate([
            'user_id' => Auth::id(),
        ], [
            'date' => Carbon::now(),
            'movie_id' => $movie->id,
        ]);

        return back()->with('success', "Vote successfully casted");
        //
    }
}
