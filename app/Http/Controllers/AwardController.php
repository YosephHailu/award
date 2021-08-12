<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Music;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    //
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function grading()
    {
        //
        $movies = Movie::all()->sortByDesc(function($query, $key) {
            return $query->movieVote->count();
        });
        $musics = Music::all();
        return view('award.grading')->with(['movies' => $movies, 'musics' => $musics]);
    }

}
