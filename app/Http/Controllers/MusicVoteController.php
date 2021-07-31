<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\MusicVote;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MusicVoteController extends Controller
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
    public function castVote(Music $music)
    {
        $movieVote = MusicVote::updateOrCreate([
            'user_id' => Auth::id(),
        ], [
            'date' => Carbon::now(),
            'music_id' => $music->id,
        ]);

        return back()->with('success', "Vote successfully casted");
        //
    }
}
