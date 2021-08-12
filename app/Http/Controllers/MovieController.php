<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies = Movie::all();
        return view('movie.movie')->with('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('movie.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'director' => 'required',
            'producer' => 'required',
            'genre' => 'required',
            'production_company' => 'required',
            'released_date' => 'required',
            'photo' => 'required',
            'description' => 'required',
        ]);

        
        if ($request->hasFile('photo')) {
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->storeAs('public/uploads/movie/', $fileNameToStore);
        } else {
            $fileNameToStore = "placeholder.php";
        }
        
        Movie::firstOrCreate([    
            'name' => $request->name,
            'director' => $request->director,
            'producer' => $request->producer,
            'genre' => $request->genre,
            'production_company' => $request->production_company,
            'released_date' => $request->released_date,
            'budget' => $request->budget,
            'image' => $fileNameToStore,
            'description' => $request->description,
        ]);

        return redirect('movie')->with('success', 'Successfully Registered !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
        return view('movie.movie_detail')->with('movie', $movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
        return view('movie.registration')->with(['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
        $request->validate([
            'name' => 'required',
            'director' => 'required',
            'producer' => 'required',
            'genre' => 'required',
            'production_company' => 'required',
            'released_date' => 'required',
            'photo' => 'required',
            'description' => 'required',
        ]);

        
        if ($request->hasFile('photo')) {
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->storeAs('public/uploads/movie/', $fileNameToStore);
        } else {
            $fileNameToStore = $movie->image;
        }
        
        $movie->update([    
            'name' => $request->name,
            'director' => $request->director,
            'producer' => $request->producer,
            'genre' => $request->genre,
            'production_company' => $request->production_company,
            'released_date' => $request->released_date,
            'budget' => $request->budget,
            'image' => $fileNameToStore,
            'description' => $request->description,
        ]);

        return redirect('movie')->with('success', 'Successfully Updated !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
        $movie->delete();

        return back()->with('success', 'Successfully Deleted !!');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function candidates(Movie $movie)
    {
        //
        return view('candidate.candidates')->with('movie', $movie);
    }
}
